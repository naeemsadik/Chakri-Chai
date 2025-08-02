<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('home', [
             'jobs' => JobListing::latest()->paginate(10)
        ]);
    }

    public function show(JobListing $job)
    {
        return view('jobDescription', [
            'job' => $job
        ]);
    }

    public function apply(JobListing $job)
    {
        return view('jobApply', [
            'job' => $job
        ]);
    }
}
