<?php

namespace App\Services;

use App\Interfaces\VerifyMailServiceInterface;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;

class VerifyMailService implements VerifyMailServiceInterface
{
    public function send($email, $token_verify, $time_create)
    {
        Mail::to($email)->send(new VerifyMail($token_verify, $time_create));
    }
}
