<?php

namespace App\Http\Controllers;

use App\Mail\anotherSimpleMail;
use Illuminate\Http\Request;
use App\Mail\simpleMail;
use Illuminate\Support\Facades\Mail;

class mailingController extends Controller
{

    var $fakeMail='leandro.torrey@0ld0ak.com';

    public function simpleMail(Mail $mail){


        $mail::to($this->fakeMail)->send(new simpleMail());

        return back();
    }

    public function simpleMailMarkdown(Mail $mail){
        $mail::to($this->fakeMail)->send(new anotherSimpleMail());

        return back();
    }
}
