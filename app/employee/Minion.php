<?php

namespace App\employee;

use App\employee\Employee;

//require_once 'Employee.php';

class Minion extends Employee
{
    public function fire()
    {
        print "{$this->name}: I will pack the bags\n";
    }
}
