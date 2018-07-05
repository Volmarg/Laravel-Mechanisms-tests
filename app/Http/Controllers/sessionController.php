<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class sessionController extends Controller
{

    public function flash(){

        session()->flash('redirect','You\'ve been redirected ');
        return back();
    }
}
