<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class data_caching_test extends Model
{


    public function returnAllRecords(){

        $value=Cache::remember('checking_key_usage',1,function (){
            return DB::table('data_caching_tests')->select('name')->get();
        });

        return $value;
    }
}
