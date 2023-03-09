<?php

namespace App\Interfaces;

interface VerifyMailServiceInterface
{
    public function send($email, $token_verify, $time_create);
}
