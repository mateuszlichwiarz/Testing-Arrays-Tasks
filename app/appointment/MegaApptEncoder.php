<?php

namespace App\appointment;

use App\appointment\ApptEncoder;

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Appointment data encoded in MegaCal format\n";
    }
}