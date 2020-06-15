<?php

namespace App\Employee;

use App\employee\Minion;

class NastyBoss
{
    private $employees = [];

    public function addEmployee(string $employeeName)
    {
        $this->employees[] = new Minion($employeeName);
    }

    function projectFails()
    {
        if(count($this->employees) > 0){
            $emp = array_pop($this->employees);
            $emp->fire();
        }
    }
}