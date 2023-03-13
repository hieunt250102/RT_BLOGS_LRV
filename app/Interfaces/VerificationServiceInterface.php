<?php

namespace App\Interfaces;

interface VerificationServiceInterface
{
    public function verify($request, $user);
}
