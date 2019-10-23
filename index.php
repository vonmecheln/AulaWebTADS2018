<?php

include_once 'config.php';
include_once 'autoload.php';

$daoAluno = new DaoAluno();
$lista_de_alunos = $daoAluno->getAll();

echo "<pre>";
print_r($lista_de_alunos);

die();

if ($_GET['url'] == 'questionario') {

  $t = new TelaQuestionario();
  echo $t->formularioPesquisaPublico();

} elseif ($_GET['url'] == 'respostas') {

  $vr = new VerificaRespostas();
  echo $vr->VerificaResposta();

}

else {
  echo "<pre>";
  echo "URL invalida:<br>";
  print_r($_GET);
}

 ?>
