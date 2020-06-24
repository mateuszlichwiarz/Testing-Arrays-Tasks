<?php

namespace App\appointment;

abstract class ApptEncoder
{
    abstract public function encode(): string;
}