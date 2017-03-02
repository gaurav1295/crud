<?php

session_start();

//session start
$GLOBALS['config'] = array(
  'mysql'=>array(
    'host'=>'localhost';
    'username'=>'root';
    'password'=>'';
    'database'=>'crud';
  ),
  'remember'=>array(
    'cookie_name'=>'hash',
    'cookie_expire'=>6534555;
  ),
  'session'=array(
    'session_name'=>'user'

  ));

  spl_autoload_register(function($class){
    require_once '/classes/'.$class.'.php';
  });

  require_once '/functions/sanitize.php';
 ?>
