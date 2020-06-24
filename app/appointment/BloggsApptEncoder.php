<?php

namespace App\appointment;

use App\appointment\ApptEncoder;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Appointment data encoded in BloggsCal format\n";
    }
}