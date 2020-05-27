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
        $this->operations = array_merge($this->operations, $operations);
    }
    public function getOperations()
    {
        return $this->operations;
    }
}