<?php

use PHPUnit\Framework\TestCase;

use App\employee\Minion;
use App\employee\Employee;

class MinionTest extends TestCase
{
    public function testTrueAssertsToTrue()
    {
        $obj = new Minion();

        $this->assertTrue(true);
    }
}