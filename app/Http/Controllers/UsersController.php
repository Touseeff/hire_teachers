<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Mail\TeacherVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $validation = $request->validated();
        if ($validation) {
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->phone_number = $request->number;
            $verification_code = $user->user_verification_code = $request->_token.rand(100, 10000000);
            $user->save();
            if ($user) {
                $url = $verification_code;
                $details = [
                    'title' => "Register Verification",
                    'link' => $request->email,
                ];
                Mail::to('tauseefchoohan000@gmail.com')->send(new TeacherVerification($url, $details));
                return view('login')->with([
                    'success' => 'Check Email, Click Verification Link',
                    'status' => 'alert-success'
                ]);
            } else {
                return view('user_register')->with([
                    'error' => 'Registration was not successful. Please try again.',
                    'status' => 'alert-danger'
                ]);
            }
        }
    }

    /**
     * Profile Update.
     *
     */

    public function ProfileUpdate($user)
    {
        $user = session('userRecord');
        if (!$user) {
            return redirect()->back()->with(['error' => 'User Record not found']);
        } else {
            return view('user_profile_create', compact('user'));
        }
    }


    public function ProfileStore(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $extention = $file->getClientOriginalExtension();
            $name_substr_replace = str_replace(" ", "-", $user->name);
            $file_name = $name_substr_replace . "-" . time() . "." . $extention;
            $path = public_path('teacher_cv');

            $user->date_of_birth = $request->date_of_birth;
            $user->country = $request->country;
            $user->gender = $request->gender;
            $user->user_status = 'register';
            $user->cv = $file_name;
            $user->save();
            if ($user) {
                $file->move($path, $file_name);
                return view('dasboard', ['user' => $user]);
                // return redirect()->route('dashboard')->with(['user' => $user]);
            } else {
                echo "not updated";
            }
        } else {
            echo "";
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
