<?php

namespace App\Services;

use App\Interfaces\AuthenticationServiceInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticationService implements AuthenticationServiceInterface
{
    public function login($request)
    {
        $validated = $request->validated();
        $login = $validated['username'];
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $fields = [
            $field => $login,
            'password' => $validated['password']
        ];

        if (auth()->attempt($fields)) {
            session()->regenerate();
            $user = Auth::getProvider()->retrieveByCredentials($fields);
            Auth::login($user);
            if (Auth::user()->status == User::STATUS_VERIFIED) {
                return redirect()->route('blogs.index');
            } else {
                return redirect()->route('auth.email.verify', [
                    'email' => $request->email,
                    'message' => ''
                ]);
            }
        } else {
            return redirect()->back()->with(['err' => 'Username or password is incorrect!']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.sign-in');
    }
}
