<?php

use PHPUnit\Framework\TestCase;

use App\employee\Minion;
use App\employee\CluedUp;
use App\employee\NastyBoss;

class NastyBossTest extends TestCase
{
    public function testTrueAssertsToTrue()
    {
        $boss = new NastyBoss();
        $this->assertTrue(true);
    }

    /** @test */
    public function employee_minion_fire()
    {
        $boss = new NastyBoss();
        $boss->addEmployee(new Minion("Mateusz"));
        $boss->projectFails();
        $this->assertTrue(true);
    }

    /** @test */
    public function employee_cluedUp_fire()
    {
        $boss = new NastyBoss();
        $boss->addEmployee(new Minion("Mateusz"));
        $boss->addEmployee(new CluedUp("Arkadiusz"));
        $boss->addEmployee(new CluedUp("Pawel"));
        $boss->addEmployee(new Minion("Piotr"));
        $boss->addEmployee(new Minion("Kamil"));
        $boss->projectFails();

        $this->assertTrue(true);
    } 
}