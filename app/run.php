<?php 

namespace App;

require_once '../vendor/autoload.php';

use App\employee\NastyBoss;
use App\employee\Minion;
use App\employee\CluedUp;

//require_once 'employee/NastyBoss.php';
//require_once 'employee/Minion.php';
//require_once 'employee/CluedUp.php';

$boss = new NastyBoss();
$boss->addEmployee(emplyee::recruit("Mateusz"));
$boss->projectFails();