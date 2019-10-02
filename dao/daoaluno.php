<?php
class DaoAluno
{
  public function getAll()
  {
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
  }
}
 ?>
