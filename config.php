<?php

define('DEFAULT_HOMEPAGE', 'principal/home');
define('SMARTY_DIR',str_replace("\\","/",getcwd()).'/recursos/smarty/libs/');
define('SISTEMA_DIR', 'http://'.$_SERVER['HTTP_HOST'] . str_replace('index.php','', $_SERVER['SCRIPT_NAME'] ));

 ?>
