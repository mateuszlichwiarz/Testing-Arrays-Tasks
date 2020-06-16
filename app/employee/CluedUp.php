<?php

namespace App\employee;

use App\employee\Employee;

class CluedUp extends Employee
{
    public function fire()
    {
        print "{$this->name}: I will call to lawyer!\n";
    }
}