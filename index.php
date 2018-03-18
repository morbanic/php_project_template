<?php  

if(session_status() == PHP_SESSION_NONE) session_start();
require_once('config.php');

use User\User as User;
use Business\Business as Business;
use Api\HNBTecaj as HNBTecaj;

$user = new User("Test1");
$business = new Business("student");
$user->setBusiness($business);
echo $user->getName()  . " is " . $user->getBusiness()->getName();


echo "<br><br>";

$tecaj = new HNBTecaj();
echo $tecaj->getCurrencyCourse("USD")->getCourse();
echo "<br><br>";
echo $tecaj->getCurrencyCourse("EUR")->getCourse();