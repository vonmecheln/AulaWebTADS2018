<?php

include_once 'autoload.php';

$daoAluno = new DaoAluno();
$daoAluno->getAll();


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
