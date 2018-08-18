<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\data_caching_test;
use Illuminate\Support\Facades\Cache;

class dbCache extends Controller
{
    public function rememberBased(data_caching_test $caching){

        $eloquent_return=$caching->returnAllRecords();

        //checking_key_usage
        $get_cache_by_key=Cache::get('checking_key_usage');

        dd($get_cache_by_key);

      return  view('caching',compact('eloquent_return','get_cache_by_key'));
    }
}
