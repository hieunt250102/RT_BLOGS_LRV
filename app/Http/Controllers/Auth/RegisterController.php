<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\VerifyMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('client.sign-up');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'token_verify' => bin2hex(random_bytes(30)),
        ]);
        $mailable = new VerifyMail(
            $user->token_verify,
            $user->created_at,
        );
        Mail::to($user->email)->queue($mailable);
        return redirect()->route('email.verify', ['email' => $user->email]);
    }
}
