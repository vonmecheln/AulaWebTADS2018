<?php

spl_autoload_register("autoloader");


function autoloader($classname) {

  if($classname == 'Smarty'){
    require_once(SMARTY_DIR . 'Smarty.class.php');
    return;
  }

  // $diretorios[] = "visao";
  // $diretorios[] = "controle";
   $diretorios[] = "model";
   $diretorios[] = "dao";
  //
  foreach ($diretorios as $dir) {
    $filename = "./$dir/". strtolower($classname) .".php";
    if (file_exists("$filename")) {
      include_once($filename);
      return;
    }
  }


}

 ?>
