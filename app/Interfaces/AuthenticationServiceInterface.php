<?php

namespace App\Interfaces;

interface AuthenticationServiceInterface
{
    public function login($request);

    public function logout();
}
