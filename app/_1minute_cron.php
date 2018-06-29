<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _1minute_cron extends Model
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
