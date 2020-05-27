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
        $filteredOperations = array_filter($operations, function($operation){
            if(!$operation instanceof OperationInterface)
            {
                return false;
            }

            return true;
        });
        

        $this->operations = array_merge($this->operations, $filteredOperations);
    }
    public function getOperations()
    {
        return $this->operations;
    }
}