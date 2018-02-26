<?php  
ini_set("display_errors","1");

if(session_status() == PHP_SESSION_NONE) session_start();
require_once(__DIR__.'/vendor/autoload.php');
require_once(__DIR__.'/bootstrap.php');


// defines 
define("HNB_API_URL","http://api.hnb.hr");