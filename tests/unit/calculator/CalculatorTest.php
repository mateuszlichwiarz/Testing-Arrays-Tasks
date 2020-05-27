<?php

use PHPUnit\Framework\TestCase;

use App\Calculator\Addition;
//use App\Calculator\Division;
use App\Calculator\Calculator;

class CalculatorTest extends TestCase
{
    /** @test */
    public function can_set_single_operation()
    {
        $addition = new Addition();
        $addition->setOperands([5, 10]);

        $calculator = new Calculator();
        $calculator->setOperation($addition);

        $this->assertCount(1, $calculator->getOperations());
    }
}