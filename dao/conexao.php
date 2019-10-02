<?php
class Conexao
{
  private static $conexao;

  private function __construct(argument)
  {
    
  }

  public static function getInstance(){
    if ($conexao == null) {
      $conexao = new Conexao();
    }
    return $conexao;
  }

}



 ?>
