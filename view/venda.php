<?php

class Venda
{

  function NovaVenda()
  {
    echo "Nova Venda";
  }

  function Painel(){
    $smarty = new Smarty();

    $smarty->template_dir = 'view/templates/';
    $smarty->compile_dir = 'view/templates_c/';
    $smarty->cache_dir = 'view/cache/';
    $smarty->caching = false;
    $smarty->force_compile = true;


    $smarty->assign('sd', SISTEMA_DIR);
    $smarty->assign('titulo', 'Painel de Venda');
    $smarty->assign('descricao', 'Painel de Venda');

    $smarty->display('painel_venda.tpl');
  }
}

 ?>
