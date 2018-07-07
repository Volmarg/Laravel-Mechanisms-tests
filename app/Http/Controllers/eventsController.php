<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\testEvent;

class eventsController extends Controller
{
    public function simpleTest(){

        event(new testEvent(['test' => 'value']));

        return view('event');
    }
}
