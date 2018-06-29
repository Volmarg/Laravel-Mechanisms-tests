<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _5minute_cron extends Model
{
    function insertTime($time){

        return $this->insert([
            'time'=>$time
        ]);
    }

    function getUpdates(){
        return $this->select('time');
    }
}
