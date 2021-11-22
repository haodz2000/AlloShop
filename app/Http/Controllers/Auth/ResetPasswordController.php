<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\PasswordReset;
use App\Notifications\ResetPasswordRequest;
use App\Notifications\SendPasswordReset;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ResetPasswordController extends Controller
{
    public function index(){
        return view('authentication.pages.forgot-password');
    }
    public function sendEmail(Request $request){
        $user = User::where('email',$request->email)->firstOrFail();
        $passwordReset = PasswordReset::updateOrCreate([
            'email' => $user->email,
        ],[
            'token' => Str::random(60),
        ]);
        if($passwordReset){
            $user->notify(new ResetPasswordRequest($passwordReset->token));
        }
        return response()->json([
            'message' => 'We have e-mailed your password reset link!'
            ]);
    }

    public function reset(Request $request, $token){
        $passwordReset = PasswordReset::where('token',$token)->firstOrFail();
        if(Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()){
            $passwordReset->delete();
            return response()->json([
                'message' => 'This password reset token is invalid.',
            ], 422);
        }
        $user = User::where('email',$passwordReset->email)->firstOrFail();
        $newPassword = Str::random(8);
        $updatePasswordUser = $user->update(['password'=>bcrypt($newPassword)]);
        $passwordReset->delete();
        $user->notify(new SendPasswordReset($newPassword));
        return redirect()->route('signin.index');
    }
}
