<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendWelcomeEmail(Request $request){
        $toEmail=$request['email'];
        $subject="Welcome Email";
        $emailMessage="WElcome to the laravel project";

        Mail::to($toEmail)->send(new WelcomeMail($subject,$emailMessage));
    }
}
