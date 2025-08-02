<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\ProfileController;


//Authentication
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');

// Route::post('/handleLogin', [AuthController::class, 'handleLogin'])->name('login.handle');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');

// Route::post('/handleRegister', [AuthController::class, 'handleRegister'])->name('register.handle');

//Dashboard
Route::get('/', [JobController::class, 'index'])->name('home');

//Job Description
Route::get('/description/{job}', [JobController::class, 'show'])->name('job.description');

//Job Apply
Route::get('/apply/{job}', [JobController::class, 'apply'])->name('job.apply');

Route::post('/application/{job}', [JobApplicationController::class, 'store'])->name('application.store');

//See Application List
Route::get('/application/list/{job}', [JobApplicationController::class, 'index'])->name('application.list');

//See Application
Route::get('/application/details/{application}', [JobApplicationController::class, 'showDetails'])->name('application.details');

//Approve Application
Route::post('/application/approve/{application}', [JobApplicationController::class, 'approve'])->name('application.approve');
