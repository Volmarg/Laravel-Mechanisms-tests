<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\simpleMail;
use Illuminate\Support\Facades\Mail;

class mailingController extends Controller
{
    public function simpleMail(Mail $mail){

        $mail::to('leandro.torrey@0ld0ak.com')->send(new simpleMail());

        return back();
    }
}
