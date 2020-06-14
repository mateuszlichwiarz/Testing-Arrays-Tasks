<?php

namespace App\run;

class Run
{
    private $string;

    public function __construct($string)
    {
        $string = $this->$string;
    }

    public function getString()
    {
        return $this->string; 
    }
}