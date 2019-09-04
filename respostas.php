<?php

// Constantes de validação
define('NUM_QUESTOES', 5);
define('MSG_ERRO', 'Preencha corretamente o formulário');

//Verificar se tem apenas 5 parametros
$qtd = count($_GET);
if ($qtd != NUM_QUESTOES) {
  echo MSG_ERRO;
  return;
}

//Verificar se os 5 parametros são p1, p2, p3, p4, e p5
for ($i=1; $i <= NUM_QUESTOES; $i++) {
  $p = 'p'.$i;
  if (!isset($_GET[$p])) {
    echo MSG_ERRO;
    return;
  }
}

//Verificar se o valor dos parametros são 's' ou 'n' apenas
for ($i=1; $i <= NUM_QUESTOES; $i++) {
  $p = 'p'.$i;
  if (!($_GET[$p] == 's' || $_GET[$p] == 'n')) {
    echo MSG_ERRO;
    return;
  }
}

require 'verifica_respostas.php';
$vr = new VerificaResposta();
echo $vr->contabilizar($_GET);

 ?>
