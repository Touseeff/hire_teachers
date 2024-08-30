<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use App\Http\Requests\UserRequest;
use App\Mail\ResetPasswordVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function userVerification($token)
    {
        $user = User::where('user_verification_code', $token)->first();
        if ($user) {
            $user->user_verification_status = 'Active';
            $user->save();
            return view('login', [
                'email' => $user->email,
                'success' => 'Congratulations! Email Verification Successful',
                'status' => 'alert-success'
            ]);
        } else {
            return view('user_register')->with([
                'error' => 'Registration verification was not successful. The verification link can only be used once and expires after successful login. Please try again.',
                'status' => 'alert-danger'

            ]);
        }
    }
    public function loginMatch(Request $request)
    {
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $record = User::where('id', Auth::user()->id)
                ->where('user_verification_status', 'Active')
                ->first();
            if ($record) {
                if ($record->role_id == '2') {
                    $record->user_verification_code = "";
                    $record->save();
                    session(['user' => $record]);
                    $user = session('user');
                    return view('dasboard', [
                        'user' => $record,
                        'success' => 'login Successfully',
                        'status' => 'alert-success',
                    ]);
                } else {
                    return view('login', ['error' => 'Admins should use the admin login page. Please visit the admin login page.', 'status' => 'alert-danger']);

                }
                if ($record->role_id = '3') {
                    $record->user_verification_code = "";
                    $record->save();
                    session(['school' => $record]);
                    $school = session('school');
                    return view('dashboard'
                    , [
                        'user' => $record,
                        'success' => 'login Successfully',
                        'status' => 'alert-success',
                    ]);
                } else {
                    return view('login', ['error' => 'Admins should use the admin login page. Please visit the admin login page.', 'status' => 'alert-danger']);

                }

            } else {
                return view('login', ['error' => 'Your Email Verification not successful ! Please first Email Verify', 'status' => 'alert-danger']);
            }

        } else {
            return view('login', ['error' => 'Your Email or Password Invalid', 'status' => 'alert-danger']);
        }
    }

    public function forgotPassword()
    {
        return view('forgot_password');
    }

    public function forgotPasswordStore(Request $request)
    {
        // dd($request->toArray());
        $validation = $request->validate([
            'email' => 'required|email'
        ]);

        if ($validation) {
            $email = $request->email;
            $user = User::where('email', $email)->first();
            if ($user) {
                $token1 = $user->reset_password = $request->_token . rand(100, 10000000);
                $user->save();

                $url = '/user/password/reset/';
                $token = $token1;
                Mail::to('tauseefchoohan000@gmail.com')->send(new ForgotPasswordMail($url, $token));

                return redirect()->route('forgot.create')->with([
                    'success' => 'Check your email. A link has been sent for password reset.',
                    'status' => 'alert-success'
                ]);
            } else {
                return redirect()->route('forgot.create')->with([
                    'error' => 'Record not found. Please try again.',
                    'status' => 'alert-danger'
                ]);
            }
        } else {
            return redirect()->route('forgot.create')->with([
                'error' => 'Email is required.',
                'status' => 'alert-danger'
            ]);
        }
    }


    public function passwordReset($token)
    {
        //         echo $token;
// echo"fdfd";
//         die;
        // dd($/token);
        // dd($request->toArray());

        $record = User::where('reset_password', $token)->first();
        // dd($record->toArray());
        if ($record) {
            // echo "fdfd";
            // session()->flash('success', 'Forgot password verification successful!');
            // session()->flash('status', 'alert-success');
            // return view('password_reset')->with([
            //     'success'=>
            //     'Forgot password verification successful!',
            //     'status'=>
            //     'alert-success',
            // ]);
            // session(['password_reset_token' => $token]);


            // Redirect with a flash message
            return view('password_reset', [
                'token' => $token,
                'success' => 'Forgot password verification successful!',
                'status' => 'alert-success'
            ]);

            // echo "ffd";
        } else {
            return redirect()->route('login.create')->with([
                // 'token' => $token,
                'error' => 'No record found or the reset password token has expired.',
                'status' => 'alert-danger'
            ]);
        }
    }

    public function passwordStore(Request $request)
    {
        // dd($request->toArray());
        $validation = $request->validate([
            'password' => 'required|confirmed',
        ]);
        if ($validation) {
            $user = User::where(
                'reset_password',
                $request->remember_token
            )->first();
            if ($user) {
                // dd($user->toArray());
                // $user->reset_password = $token;
                $user->password = bcrypt($request->password);
                $user->reset_password = "";
                $user->save();
                if ($user) {
                    // $user->save();
                    Mail::to('tauseefchoohan000@gmail.com')->send(new ResetPasswordVerification);
                    return view('login', [
                        'success' => 'Congratulation Reset Password Successfully',
                        'status' => 'alert-success'
                    ]);
                } else {
                    return view('forgot_password', [
                        'error' => 'Not Record Found OR Reset password token Expire',
                        'status' => 'alert-danger'
                    ]);
                }
            } else {
                return view('forgot_password', [
                    'error' => 'Not Record Found OR Reset password token Expire',
                    'status' => 'alert-danger'
                ]);
            }
        } else {
            return view('password_reset', [

                'error' => 'Not Record Found OR Reset password token Expire',
                'status' => 'alert-danger'
            ]);
        }

    }

    public function dashboard()
    {
        return view('dasboard');
    }
    public function logout()
    {
        Auth::logout();
        return view('index');


    }
}


