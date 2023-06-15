<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;
use App\Models\User;
use Mail;
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    //

    public function showForgetPasswordForm()
    {
         return view('admin.auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
          $request->validate([
              'email' => 'required|email|exists:users,company_email',
          ]);

          $token = Str::random(64);

          DB::table('password_resets')->insert([
              'email' => $request->email,
              'token' => $token,
              'created_at' => Carbon::now()
            ]);

          Mail::send('admin.email.forgetPassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });

        return redirect()->route('home')->with('message','We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token) {
        return view('admin.auth.forgetPasswordLink', ['token' => $token]);
     }

     public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
                'email' => 'required|email|exists:users,company_email',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);

          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email,
                                'token' => $request->token
                              ])
                              ->first();

          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }

          $user = User::where('company_email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);

          DB::table('password_resets')->where(['email'=> $request->email])->delete();

          return redirect()->route('home')->with('message', 'Your password has been changed!');
      }

}
