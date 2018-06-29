<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cron;

class tester extends Controller
{
    public function cronTime(cron $cron){

        $cron->insertTime('test');
        echo 'Time updated';
    }
}
