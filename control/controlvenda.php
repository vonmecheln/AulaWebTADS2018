<?php

class ControlVenda
{
  private $daoVenda;
  function __construct()  {
    $this->daoVenda = new DaoVenda();
  }

  function inc()  {
    $this->daoVenda->atualizarQtdVenda(1);
    $this->getQtd();
  }

  function dec()  {
    $this->daoVenda->atualizarQtdVenda(-1);
    $this->getQtd();
  }

  function getQtd()  {
    echo $this->daoVenda->buscarQtd();
  }
}

 ?>
