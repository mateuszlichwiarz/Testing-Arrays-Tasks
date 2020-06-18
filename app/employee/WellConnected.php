<?php

namespace App\employee;

use App\employee\Employee;

//require_once 'Employee.php';

class WellConnected extends Employee
{
    public function fire()
    {
        print "{$this->name}: I will call to my dad!\n";
    }
}