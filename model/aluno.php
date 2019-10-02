<?php
class Aluno
{
  private $id_aluno;
  private $nome;
  private $matricula;

  public function getIdAluno(){return $this->id_aluno;}
  public function setIdAluno($id_aluno){$this->id_aluno = $id_aluno;}

  public function getNome(){return $this->nome;}
  public function setNome($nome){$this->nome = $nome;}

  public function getMatricula(){return $this->matricula;}
  public function setMatricula($matricula){$this->matricula = $matricula;}

}
?>
