<?php

if ($_GET['url'] == 'questionario') {

  require 'tela_questionario.php';
  $t = new TelaQuestionario();
  echo $t->formularioPesquisaPublico();

} elseif ($_GET['url'] == 'respostas') {

  require 'verifica_respostas.php';
  $vr = new VerificaResposta();
  echo $vr->VerificaResposta();

}

else {
  echo "<pre>";
  echo "URL invalida:<br>";
  print_r($_GET);
}

 ?>
