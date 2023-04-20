<?php

namespace App\Http\Controllers;

use Exception;
use Twilio\Rest\Client;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sms_page(){
        return view('sendsms');

    }

    public function send_sms(Request $request){
        $receiver_number = $request->phonenumber;
        $message = $request->message;

        try{
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiver_number,[
                'from' => $twilio_number,
                'body' => $message
            ]);
            return redirect()->back();
        } catch (Exception $e){
            
        }
    }
}
