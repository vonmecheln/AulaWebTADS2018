<?php

include_once 'config.php';
include_once 'autoload.php';

//recupera a url digitada
$u = isset($_GET['url']) ? trim($_GET['url']) : false;
carregaUrl($u);

function carregaUrl($url = DEFAULT_HOMEPAGE){

  //Se não foi pedido uma url é função é chamada vazia para carregar a DEFAULT_HOMEPAGE
  if (!$url) {
    carregaUrl();
    return;
  }

  //Tratamento da URL: Os dois argumentos serão a Classe e o Método os demais são parametros
  //Os dois primeiros são obrigatórios
  //Ex:
  //home/principal
  //produto/listar/1
  $partes_url = explode('/', $url);
  if ( (count($partes_url) < 2)
    || ( strlen(trim($partes_url[0])) == 0)
    || ( strlen(trim($partes_url[1])) == 0) ){
      echo"url inválida";
    carregaUrl();
    return;
  }


  //normaliza os nomes e separa os parametros
  $param = [];
  foreach($partes_url as $i => $p){

    if ($i < 2){
      //Os dois primeiros argumentos serão normalizados para o nome de Classes e Métodos
      $norm = str_replace("_", " ", $p); // Separação de palavras
      $norm = strtolower($norm); // tudo para minúsculo
      $norm = ucwords($norm); // Primeira letra em Maiúsculo de cada palavra
      $norm = str_replace(" ", "", $norm); // Une as palavras
      $partes_url[$i] = $norm;
      //Ex.:
      //produtos/listar_ativos -> Produtos|ListarAtivos
      //cArrInho_dE_cOMpraS/CANCELAR_tuDO -> CarrinhosDeCompras|CancelarTudo
    } else {
      $param[] = $p;
    }

  }


  //Verificação se a Classe existe
  if (!class_exists($partes_url[0])) {
    echo"url inválida";
    carregaUrl();
    return;
  }

  //Verificação se o Método existe
  $classe = new $partes_url[0]();
  if (!method_exists($classe, $partes_url[1])) {
    echo"url inválida";
    carregaUrl();
    return;
  }
  $metodo = $partes_url[1];
  $classe->$metodo(); //Finalmente executa a classe e o método solicitado, enviando os parametros

}


// $daoAluno = new DaoAluno();
// $lista_de_alunos = $daoAluno->getAll();
//
// echo "<pre>";
// print_r($lista_de_alunos);
//
// die();
//
// if ($_GET['url'] == 'questionario') {
//
//   $t = new TelaQuestionario();
//   echo $t->formularioPesquisaPublico();
//
// } elseif ($_GET['url'] == 'respostas') {
//
//   $vr = new VerificaRespostas();
//   echo $vr->VerificaResposta();
//
// }
//
// else {
//   echo "<pre>";
//   echo "URL invalida:<br>";
//   print_r($_GET);
// }

 ?>
