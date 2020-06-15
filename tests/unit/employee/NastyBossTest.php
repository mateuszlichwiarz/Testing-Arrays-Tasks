<?php

use PHPUnit\Framework\TestCase;

use App\employee\Minion;
use App\employee\NastyBoss;

class NastyBossTest extends TestCase
{
    public function testTrueAssertsToTrue()
    {
        $boss = new NastyBoss();
        $boss->addEmployee("Mateusz");
        $boss->projectFails();
        $this->assertTrue(true);
    }
}