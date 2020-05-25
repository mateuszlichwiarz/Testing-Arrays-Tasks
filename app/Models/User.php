<?php

namespace App\Models;

class User
{
    private $first_name;
    private $last_name;

    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getFullName()
    {
        $first_name = $this->getFirstName();
        $last_name = $this->getLastName();

        $full_name = $first_name.' '.$last_name;
        return $full_name;
    }
}