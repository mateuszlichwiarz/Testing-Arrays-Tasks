<?php

namespace App\appointment;

use App\appointment\ApptEncoder;
use App\appointment\BloggsApptEncoder;
use App\appointment\MegaApptEncoder;

abstract class CommsManager
{
    abstract public function getApptEncoder(): ApptEncoder;
    abstract public function getHeaderText(): string;
    abstract public function getFooterText(): string;
}