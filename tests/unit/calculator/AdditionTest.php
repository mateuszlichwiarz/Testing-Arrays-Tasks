<?php

use PHPUnit\Framework\TestCase;

use App\Calculator\Addition;

class AdditionTest extends TestCase
{
    /** @test */
    public function adds_up_given_operands()
    {
        $addition = new Addition();

        $addition->setOperands([5,10]);

        $this->assertEquals(15, $addition->calculate());
    }
}