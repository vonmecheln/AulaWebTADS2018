<?php

spl_autoload_register("autoloader");


function autoloader($classname) {

  // $filename = strtolower($classname) .".php";
  // if (file_exists("$filename")) {
  //   include_once($filename);
  //   return;
  // }


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
