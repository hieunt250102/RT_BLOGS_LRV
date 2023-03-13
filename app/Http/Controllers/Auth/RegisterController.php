<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\VerifyMailServiceInterface;

class RegisterController extends Controller
{
    private $userService;
    private $verifyMailService;

    public function __construct(UserServiceInterface $userService, VerifyMailServiceInterface $verifyMailService)
    {
        $this->userService = $userService;
        $this->verifyMailService = $verifyMailService;
        $this->middleware('guest')->except('logout');
    }


    public function registerForm()
    {
        return view('client.sign_up');
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->userService->createUser($request->only(['name', 'email', 'password']));
        $this->verifyMailService->send(
            $request->email,
            $user->token_verify,
            $user->created_at,
        );
        return redirect()->route('auth.email.verify', ['email' => $user->email]);
    }
}
