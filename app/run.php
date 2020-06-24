<?php 

namespace App;

require_once '../vendor/autoload.php';

use App\appointment\CommsManager;

$man = new CommsManager(CommsManager::MEGA);
print (get_class($man->getApptEncoder())) . "\n";

$man = new CommsManager(CommsManager::BLOGGS);
print (get_class($man->getApptEncoder())) . "\n";


//use App\preferences\Preferences;

//use App\employee\NastyBoss;
//use App\employee\Minion;
//use App\employee\CluedUp;
//use App\employee\WellConnected;
//use App\employee\Employee;

//$boss = new NastyBoss();
//$boss->addEmployee(Employee::recruit("Mateusz"));
//$boss->projectFails();

//$pref = Preferences::getInstance();
//$pref->setProperty("name", "mateusz");
//unset($pref);
//$pref2 = Preferences::getInstance();
//print $pref2->getProperty("name");