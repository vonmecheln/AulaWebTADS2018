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

    $listaRetorno = array();    

    if($stmt->setFetchMode(PDO::FETCH_ASSOC)){
      $result = $stmt->fetchAll();

      foreach ($result as $raluno) {
        $aluno = new Aluno();
        $aluno->setIdAluno($raluno['id_aluno']);
        $aluno->setNome($raluno['nome']);
        $aluno->setMatricula($raluno['matricula']);
        $listaRetorno[] = $aluno;
      }
    }

    return $listaRetorno;
  }
}

?>
