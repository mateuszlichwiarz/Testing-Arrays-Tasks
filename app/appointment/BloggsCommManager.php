<?php

namespace App\appointment;

use App\appointment\ApptEncoder;
use App\appointment\BloggsApptEncoder;
use App\appointment\MegaApptEncoder;
use App\appointment\CommsManager;

class BloggsCommManager extends CommsManager
{
    public function make(int $flag_int): Encoder
    {
        switch($flag_int){
            case self::APPT:
                return new BloggsApptEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
        }
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