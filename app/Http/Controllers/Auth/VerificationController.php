<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\VerificationServiceInterface;
use App\Interfaces\VerifyMailServiceInterface;
use App\Mail\VerifyMail;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    private $userService;
    private $verifyMailService;
    private $verificationService;

    public function __construct(
        UserServiceInterface $userService,
        VerifyMailServiceInterface $verifyMailService,
        VerificationServiceInterface  $verificationService
    ) {
        $this->userService = $userService;
        $this->verifyMailService = $verifyMailService;
        $this->verificationService = $verificationService;
    }
    public function show(Request $request)
    {
        return view('client.verify', [
            'email' => $request->email,
            'message' => ''
        ]);
    }

    public function verify(Request $request)
    {
        $user = $this->userService->findUserWithConditions('token_verify', $request->token_verify);
        return $this->verificationService->verify($request, $user);
    }

    public function resendVerify(Request $request)
    {
        $user = $this->userService->findUserWithConditions('email', $request->email);
        $this->verifyMailService->send(
            $request->email,
            $user->token_verify,
            $user->created_at,
        );
        return redirect()->route('auth.email.verify', ['email' => $user->email])
            ->with([
                'message' => "We have sent refresh link, please check your mail"
            ]);
    }
}
