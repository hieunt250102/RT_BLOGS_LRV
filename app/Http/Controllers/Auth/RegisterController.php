<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\VerifyMailServiceInterface;

class RegisterController extends Controller
{
    private $userService, $verifyMailService;
    public function __construct(UserServiceInterface $userService, VerifyMailServiceInterface $verifyMailService)
    {
        $this->userService = $userService;
        $this->verifyMailService = $verifyMailService;
    }


    public function registerForm()
    {
        return view('client.sign-up');
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->userService->createUser($request->all());
        $this->verifyMailService->send(
            $request->email,
            $user->token_verify,
            $user->created_at,
        );
        return redirect()->route('auth.email.verify', ['email' => $user->email]);
    }
}
