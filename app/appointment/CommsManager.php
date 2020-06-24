<?php

namespace App\appointment;

use App\appointment\ApptEncoder;
use App\appointment\BloggsApptEncoder;
use App\appointment\MegaApptEncoder;

class CommsManager
{
    const  BLOGGS = 1;
    const    MEGA = 2;
    private $mode = 1;

    public function __construct(int $mode)
    {
        $this->mode = $mode;
    }
    
    public function getApptEncoder(): ApptEncoder
    {
        switch($this->mode){
            case (self::MEGA):
                return new MegaApptEncoder();
            default:
                return new BloggsApptEncoder();
        }
    }

    public function getHeaderText(): string
    {
        switch($this->mode){
            case (self::MEGA):
                return "Header MegaCal\n";
            default:
                return "Header BloggsCal\n";
        }
    }
}