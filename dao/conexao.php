<?php
class Conexao
{
  private static $conexao;

  private function __construct()
  {

  }

  public function getInstance(){
    if (self::$conexao == null) {
      self::$conexao = new Conexao();
    }
    return self::$conexao;
  }

}



 ?>
