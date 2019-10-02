<?php
$conn = new PDO( "mysql:host=localhost;dbname=escola","adminer","ABC123**" );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM aluno";
$stmt = $conn->prepare($sql);

if (isset($_GET['id'])){
  $sql .= " WHERE id_aluno = :id_aluno ";
  $stmt = $conn->prepare($sql);
  
  $stmt->bindParam(':id_aluno', $_GET['id'], PDO::PARAM_INT);
}


$stmt->execute();

if($stmt->setFetchMode(PDO::FETCH_ASSOC)){
  $result = $stmt->fetchAll();
  echo "<pre>";
  print_r($result);
}
?>
