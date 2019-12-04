<?php
class Equipamento
{
  function cadastro(){
    $smarty = new Smarty();
    $smarty->template_dir = 'view/templates/';
    $smarty->compile_dir = 'view/templates_c/';
    $smarty->cache_dir = 'view/cache/';
    $smarty->caching = false;
    $smarty->force_compile = true;
    $smarty->assign('sd', SISTEMA_DIR);
    $smarty->assign('titulo', 'Cadastro de Equipamentos de Academia');
    $smarty->assign('descricao', 'Formulário de Inclusão e edição de Equipamentos de Academia');
    $smarty->display('equipamento_cadastro.tpl');
  }
}
?>
