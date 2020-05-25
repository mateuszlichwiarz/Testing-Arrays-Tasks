<?php

use PHPUnit\Framework\TestCase;

use App\Models\User;

class UserTest extends TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new User();
        $user->setFirstName('Mateusz');

        $this->assertEquals($user->getFirstName(), 'Mateusz');
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new User();
        $user->setLastName('Piotr');

        $this->assertEquals($user->getLastName(), 'Piotr');
    }

    public function testFullNameIsReturned()
    {
        $user = new User();
        $user->setFirstName('Mateusz');
        $user->setLastName('Piotr');

        $full_name = $user->getFullName();

        $this->assertEquals($full_name, 'Mateusz Piotr');
    }

    public function testTrimmedString()
    {
        $trimmed_string = User::getTrimmedString('   Mateusz   ');

        $this->assertEquals($trimmed_string, "Mateusz");
    }

    public function testEmailAdressCanBeSet()
    {
        $user = new User();
        $user->setEmail('Mateusz.lichwiarz@gmail.com');
        
        $email = $user->getEmail();

        $this->assertEquals($email, 'mateusz.lichwiarz@gmail.com');
    }



}
