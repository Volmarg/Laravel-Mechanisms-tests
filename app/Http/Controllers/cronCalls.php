<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\cron;
use App\_1minute_cron;
use App\_5minute_cron;

class cronCalls extends Controller
{
    var $cron1='';
    var $cron5='';
    var $time='';

    public function __construct()
    {
        $this->cron1=new _1minute_cron();
        $this->cron5=new _5minute_cron();
        $this->time=Carbon::now();
    }

    public function addCurrentTime_1m(){
        $this->cron1->insertTime($this->time);
    }

    public function addCurrentTime_5m(){
        $this->cron5->insertTime($this->time);
    }
}
