<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_caching_test;

class dbCache extends Controller
{
    public function rememberBased(data_caching_test $caching){

        dd($caching->returnAllRecords());

      return  view('caching');
    }
}
