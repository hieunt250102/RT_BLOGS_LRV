<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Interfaces\AuthenticationServiceInterface;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $authenticationService;
    public function __construct(AuthenticationServiceInterface $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }
    public function loginForm()
    {
        return view('client.sign-in');
    }

    public function login(LoginRequest $request)
    {
        return $this->authenticationService->login($request);
    }

    public function logout()
    {
        return $this->authenticationService->logout();
    }
}
