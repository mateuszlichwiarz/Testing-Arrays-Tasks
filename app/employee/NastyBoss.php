<?php

namespace App\employee;

class NastyBoss
{
    private $employees = [];

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    function projectFails()
    {
        if(count($this->employees) > 0){
            $emp = array_pop($this->employees);
            $emp->fire();
        }
    }
}