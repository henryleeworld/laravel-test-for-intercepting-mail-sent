<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendWelcome() 
    {
        $recipient = 'henryleeworld@gmail.com';
        Mail::to($recipient)->bcc($recipient)->send(new WelcomeMail);
        // return new WelcomeMail();
    }
}
