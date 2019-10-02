<?php

include_once 'autoload.php';

$conexao = Conexao::getInstance();
$conn = $conexao->getConexao();

$sql = "SELECT * FROM aluno";
$stmt = $conn->prepare($sql);
$stmt->execute();

if($stmt->setFetchMode(PDO::FETCH_ASSOC)){
  $result = $stmt->fetchAll();
  echo "<pre>";
  print_r($result);
}


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
