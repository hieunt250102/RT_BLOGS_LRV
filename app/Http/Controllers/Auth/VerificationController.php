<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyMail;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{

    public function show(Request $request)
    {
        return view('client.verify', [
            'email' => $request->email,
            'message' => ''
        ]);
    }

    public function verify(Request $request)
    {
        $tokenTimeExpire = (new DateTime(date("Y-m-d H:i:s", $request->time_create)))
            ->modify('+3 minutes');
        $user = User::where('token_verify', $request->token_verify)
            ->first();
        if ($tokenTimeExpire->getTimestamp() >= Carbon::now()->timestamp) {
            $user->status = User::STATUS_VERIFIED;
            $user->save();
            return redirect()->route('sign-in')
                ->with('alert', 'Verify successful, please login');
        } else {
            return redirect()->route('email.verify')->with([
                'email' => $user->email,
                'message' => "Verification code expired, please resend request"
            ]);
        }
    }

    public function resendVerify(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $mailable = new VerifyMail(
            $user->token_verify,
            $user->created_at,
        );
        Mail::to($request->email)->queue($mailable);
        return redirect()->route('email.verify')
            ->with([
                'email' => $user->email,
                'message' => "We have sent refresh link, please check your mail"
            ]);
    }
}
