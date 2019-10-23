<?php

class Principal
{

  function Home()
  {
    $smarty = new Smarty();

    $smarty->template_dir = 'view/templates/';
    $smarty->compile_dir = 'view/templates_c/';
    $smarty->cache_dir = 'view/cache/';
    $smarty->caching = false;
    $smarty->force_compile = true;


    $smarty->assign('titulo', 'Plantas Prontas');
    $smarty->assign('descricao', 'Projetos de plantas de casas prontas para construção');
    $smarty->assign('p404', $_SESSION['p404']);

    $smarty->display('home.tpl');
  }
}


 ?>
