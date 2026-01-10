<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = Job::all()->groupBy('featured');

    // return $jobs;

    // return view('home');

    return view('home', [
        'featured_jobs' => $jobs[1],
    ]);
});
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/jobs', [JobController::class, 'index']);
