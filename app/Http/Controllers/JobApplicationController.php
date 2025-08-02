<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\JobListing;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function store(Request $request, JobListing $job)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cover_letter' => 'required|string',
            'resume' => 'required|mimes:pdf|max:2048',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        JobApplication::create([
            'job_id' => $job->id,
            'employee_id' => auth()->id() ?? null,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'cover_letter' => $validated['cover_letter'],
            'resume' => $resumePath,
            'status' => 'pending',
        ]);

        return redirect()->route('home')->with('success', 'Application submitted successfully!');
    }

    public function index(JobListing $job)
    {
        $applications = $job->applications()->get();

        return view('applicationList', [
            'job' => $job,
            'applications' => $applications,
        ]);
    }

    public function showDetails(JobApplication $application)
    {
        return view('applicationDetails', ['application' => $application]);
    }

    public function approve(JobApplication $application)
    {
        $application->update([
            'status' => 'approved',
        ]);
        return redirect()->route('application.list', ['job' => $application->job_id])->with('success', 'Application has been approved!');
    }

}