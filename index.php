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

  print_r($url);



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
