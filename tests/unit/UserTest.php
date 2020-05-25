<?php

use PHPUnit\Framework\TestCase;

use App\Models\User;

class Sample extends TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new User();
        $user->setFirstName('Mateusz');

        $this->assertEquals($user->getFirstName(), 'Mateusz');
    }
}