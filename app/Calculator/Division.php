<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Division implements OperationInterface
{
    protected $operands = [];

    public function setOperands(array $operands)
    {
        $this->operands = $operands;
    }

    public function calculate()
    {
        if(count($this->operands) === 0)
        {
            throw new NoOperandsException;
        }

        $result = 0;

        foreach($this->operands as $index => $operand)
        {
            if($index === 0)
            {
                $result = $operand;
                continue;
            }

            $result = $result /$operand;
        }
        return $result;
    }
}
