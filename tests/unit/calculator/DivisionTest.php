<?php

use PHPUnit\Framework\TestCase;

use App\Calculator\Division;

class DivisionTest extends TestCase
{
    /** @test */
    public function divides_given_operands()
    {
        $division = new Division();
        $division->setOperands([100, 2]);

        $this->assertEquals(50, $division->calculate());
    }
}