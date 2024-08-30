<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;
use App\Mail\SchoolRegisterVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = session('user');
        $user_id = $user->id;
        // dd($user->toArray());
        $school = School::where('user_id', $user_id)->get();
        return view('view_schools', ['user' => $user, 'schools' => $school]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = session('user');
        return view('add_schools');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SchoolRequest $schoolRequest)
    {
        // dd($schoolRequest->toArray());
        $validation = $schoolRequest->validated();

        if ($validation) {
            $school = new User();
            $school->role_id = 3;
            $school->school_title = $schoolRequest->school_name;
            $school->admin_name = $schoolRequest->admin_name;
            $school->email = $schoolRequest->email;
            $school->password = bcrypt($schoolRequest->password);
            $school->country = $schoolRequest->country;
            $school->phone_number = $schoolRequest->number;
            $verification_code = $school->user_verification_code = $schoolRequest->_token.rand(100, 10000000);

            $saved = $school->save();

            if ($saved){
                $url = $verification_code;
                $details = [
                    'title' => "School Register Verification",
                    'link' => $schoolRequest->email,
                ];
                Mail::to('tauseefchoohan000@gmail.com')->send(new SchoolRegisterVerification($url, $details));
                return view('login')->with([
                    'success' => 'Check Email, Click Verification Link',
                    'status' => 'alert-success'
                ]);
            } else {
                return view('add_schools')->with([
                    'error' => 'Registration was not successful. Please try again.',
                    'status' => 'alert-danger'
                ]);
            }
        } else {
            echo "Validation failed.";
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
