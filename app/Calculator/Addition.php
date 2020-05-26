<?php

namespace App\Calculator;

class Addition implements OperationInterface
{
    protected $operands;

    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }

    public function calculate()
    {
        return array_sum($this->operands);
    }
}