<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sms_page(){
        return view('sendsms');

    }

    public function send_sms(Request $request){
        $receiver_number = $request->phonenumber;
        $message = $request->message;
    }
}
