<?php

namespace App\appointment;

abstract class CommsManager
{
    const APPT    = 1;
    const TTD     = 1;
    const CONTACT = 3;
    abstract public function make(int $flag_int): Encoder;   
    abstract public function getHeaderText(): string;
    abstract public function getFooterText(): string;
}