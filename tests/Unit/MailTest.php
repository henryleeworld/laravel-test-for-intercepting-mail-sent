<?php

namespace Tests\Unit;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\WithFaker;
use KirschbaumDevelopment\MailIntercept\WithMailInterceptor;
use Tests\TestCase;

class MailTest extends TestCase
{
    use WithFaker, WithMailInterceptor;

    public function testMail()
    {
        $this->interceptMail();

        $email = $this->faker->email;
        
        Mail::to($email)->send(new WelcomeMail());

        $interceptedMail = $this->interceptedMail()->first();

        $this->assertMailSentTo($email, $interceptedMail);
    }
}
