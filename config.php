<?php  
ini_set("display_errors","0");

if(session_status() == PHP_SESSION_NONE) session_start();
require_once(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/bootstrap.php');
