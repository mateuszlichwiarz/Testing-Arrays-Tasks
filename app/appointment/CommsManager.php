<?php

namespace App\appointment;

abstract class CommsManager
{
    abstract public function getApptEncoder(): ApptEncoder;
    abstract public function getHeaderText(): string;
    abstract public function getFooterText(): string;
}