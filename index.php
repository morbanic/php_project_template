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

$user2 = new User("Test2");
$user2->setNewBusiness("locksmith");
echo $user2->getName()  . " is " . $user2->getBusiness()->getName();

echo "<br><br>";

$tecaj = new HNBTecaj();
echo $tecaj->getCourse("USD");
echo "<br><br>";
echo $tecaj->getCourse("EUR");