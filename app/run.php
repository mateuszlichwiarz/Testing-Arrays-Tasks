<?php declare(strict_types=1);

namespace App\run;

class run
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