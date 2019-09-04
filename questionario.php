<?php

require 'tela_questionario.php';

$t = new TelaQuestionario();

$perguntas[] = "Você é maior de idade?";
$perguntas[] = "Você come carne?";
$perguntas[] = "Você pratica esportes?";
$perguntas[] = "Você trabalha?";
$perguntas[] = "Você tem filhos";

echo $t->criaQuestionario($perguntas);

 ?>
