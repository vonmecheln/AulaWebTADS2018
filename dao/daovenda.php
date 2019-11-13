<?php

class DaoVenda
{

  function atualizarQtdVenda($q)
  {

    $conexao = Conexao::getInstance();
    $conn = $conexao->getConexao();

    $sql = "UPDATE venda SET
    quantidade = quantidade + $q ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }


  function buscarQtd()
  {

    $conexao = Conexao::getInstance();
    $conn = $conexao->getConexao();

    $sql = "SELECT quantidade FROM venda";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->setFetchMode(PDO::FETCH_ASSOC)){
      $result = $stmt->fetchAll();
      return $result[0]['quantidade'];
    }
    return 0;

  }

}



 ?>
