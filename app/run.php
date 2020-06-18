<?php 

namespace App;

require_once '../vendor/autoload.php';

use App\employee\NastyBoss;
use App\employee\Minion;
use App\employee\CluedUp;
use App\employee\WellConnected;
use App\employee\Employee;

//require_once 'employee/NastyBoss.php';
//require_once 'employee/Minion.php';
//require_once 'employee/CluedUp.php';

$boss = new NastyBoss();
$boss->addEmployee(Employee::recruit("Mateusz"));
$boss->projectFails();