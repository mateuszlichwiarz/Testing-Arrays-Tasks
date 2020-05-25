<?php

use PHPUnit\Framework\TestCase;

use App\Models\User;

class UserTest extends TestCase
{
    protected $user;

    public function setUp(): void
    {
        $this->user = new User();
    }
    /** @test */
    public function that_we_can_get_the_first_name()
    {
        $this->user->setFirstName('Mateusz');

        $this->assertEquals($this->user->getFirstName(), 'Mateusz');
    }

    public function testThatWeCanGetTheLastName()
    {
        $this->user->setLastName('Piotr');

        $this->assertEquals($this->user->getLastName(), 'Piotr');
    }

    public function testFullNameIsReturned()
    {
        $this->user->setFirstName('Mateusz');
        $this->user->setLastName('Piotr');

        $full_name = $this->user->getFullName();

        $this->assertEquals($full_name, 'Mateusz Piotr');
    }

    public function testTrimmedString()
    {
        $trimmed_string = User::getTrimmedString('   Mateusz   ');

        $this->assertEquals($trimmed_string, "Mateusz");
    }

    public function testEmailAdressCanBeSet()
    {
        $this->user->setEmail('Mateusz.lichwiarz@gmail.com');
        
        $email = $this->user->getEmail();

        $this->assertEquals($email, 'mateusz.lichwiarz@gmail.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
       $this->user->setFirstName('Mateusz');
       $this->user->setLastName('Piotr');
       $this->user->setEmail('Mateusz.lichwiarz@gmail.com');

       $emailVariables = $this->user->getEmailVariables();

       $this->assertArrayHasKey('full_name', $emailVariables);
       $this->assertArrayHasKey('email', $emailVariables);

       $this->assertEquals($emailVariables['full_name'], 'Mateusz Piotr');
       $this->assertEquals($emailVariables['email'], 'mateusz.lichwiarz@gmail.com');

    }

}
