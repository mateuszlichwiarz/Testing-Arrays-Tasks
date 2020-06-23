<?php

namespace App\Preferences;

class Preferences
{
    private $props = [];

    private function __construct(){}

    public function setProperty(string $key, string $val)
    {
        $this->props[$key] = $val;
    }

    public function getProperty(string $key)
    {
        return $this->props[$key];
    }
}