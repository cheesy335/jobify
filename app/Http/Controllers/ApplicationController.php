<?php

namespace App\Http\Controllers;

use App\Mail\JobApplied;
use App\Models\Application;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get current auth user and job instance they applied for
        $user = User::find(Auth::user()->id);
        $job = Job::find($request->job);

        // check if user who is applying for job is the one who created job
        if ($user->id == $job->user->id) {
            abort(401, 'you can not apply for your own job');
        }

        // check if this user has already applied for this job
        $exist = Application::where([
            'job_id' => $job->id,
            'user_id' => $user->id
            ])->first();

        if ($exist) {
            dd('you already applied');
        }

        // create application if it dosen't exist already
        $application = Application::create([
            'user_id' => $user->id,
            'job_id' => $job->id,
        ]);

        Mail::to($application->job->user)->send(new JobApplied($application->user,$application->job));
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
