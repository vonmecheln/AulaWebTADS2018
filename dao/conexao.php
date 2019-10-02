<?php
class Conexao
{
  private static $conexao;
  private $servername = "localhost";
  private $username = "adminer";
  private $password = "ABC123**";
  private $dbname = "escola";
  private $conn;

  private function __construct()
  {
    $this->conn = new PDO( "mysql:host=" . $this->servername . ";dbname=" .
    $this->dbname,
    $this->username,
    $this->password );
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  private function getConexao()
  {
    return $this->conn;
  }

  public function getInstance(){
    if (self::$conexao == null) {
      self::$conexao = new Conexao();
    }
    return self::$conexao;
  }



}



 ?>
