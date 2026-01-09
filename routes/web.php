<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = Job::all()->groupBy('featured');

    // return $jobs;

    return view('home', [
        'featured_jobs' => $jobs[1],
    ]);
});

Route::get('/jobs', [JobController::class, 'index']);
