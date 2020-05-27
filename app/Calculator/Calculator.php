<?php

namespace App\Calculator;

class Calculator
{
    protected $operations = [];

    public function setOperation(OperationInterface $operation)
    {
        $this->operations[] = $operation;
    }

    public function setOperations(array $operations)
    {
        foreach($operations as $index=>$operation)
        {
            if(!$operation instanceof OperationInterface){
                unset($operations[$index]);
            }
        }
        $this->operations = array_merge($this->operations, $operations);
    }
    public function getOperations()
    {
        return $this->operations;
    }
}