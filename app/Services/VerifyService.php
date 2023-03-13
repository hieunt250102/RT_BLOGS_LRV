<?php

namespace App\Services;

use App\Interfaces\VerificationServiceInterface;
use App\Models\User;
use Carbon\Carbon;
use DateTime;

class VerifyService implements VerificationServiceInterface
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function verify($request, $user)
    {
        $tokenTimeExpire = (new DateTime(date("Y-m-d H:i:s", $request->time_create)))
            ->modify('+3 minutes');
        if ($tokenTimeExpire->getTimestamp() >= Carbon::now()->timestamp) {
            $this->userService->updateUser($user->id, ['status' => User::STATUS_VERIFIED]);
            return redirect()->route('blogs.index');
        } else {
            return redirect()->route('auth.email.verify', ['email' => $user->email])->with([
                'message' => "Verification code expired, please resend request"
            ]);
        }
    }
}
