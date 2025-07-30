<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;

Route::get('/', function () {
    return view('home', [
        'jobs' => JobListing::all()
    ]);
})->name('home');

Route::get('/description/{id}', function ($id) {
    return view('jobDescription', [
        'jobs' => JobListing::find($id)
    ]);
})->name('job.description');


Route::get('/apply/{id}', function ($id) {
    return view('jobApply', [
        'job' => JobListing::find($id)
    ]);
})->name('job.apply');

