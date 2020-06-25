<?php

namespace App\apointment;

use App\appointment\ApptEncoder;
use App\appointment\BloggsApptEncoder;
use App\appointment\MegaApptEncoder;
use App\appointment\CommsManager;

class BloggsCommManager extends CommsManager
{
    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getHeaderText(): string
    {
        return "Header BloggsCal\n";
    }

    public function getFooterText(): string
    {
        return "Footer BloggsCal\n";
    }
}