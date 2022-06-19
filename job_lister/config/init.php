<?php 

//ref system/redirect.php session start values to work
session_start();

require_once 'config.php'; 

require_once 'system/redirect.php';
//auto loads classes
function __autoload($class_name){
        require_once 'lib/'.$class_name. '.php'; 
}
