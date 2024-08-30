<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\UserJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // return "testing";


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $user = session('user');
        return view('add_jobs', ['user' => $user, 'school_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job = new Job();
        $job->schools_id = $request->school_id;
        $job->title = $request->job_title;
        $job->expire_date = $request->job_expire_date;
        $job->details = $request->job_details;
        if ($job->save()) {
            $user_job = new UserJob();
            $user_job->user_id = Auth::user()->id;
            $user_job->jobs_id = $job->id;
            if ($user_job->save()) {
                echo "Record added successfully";
            } else {
                echo "Failed to store user_jobs";
            }
        } else {
            echo "Failed to store jobs";
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
