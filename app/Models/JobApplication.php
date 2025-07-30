<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    /** @use HasFactory<\Database\Factories\JobApplicationFactory> */
    use HasFactory;

    protected $filleable = [
        'job_id',
        'full_name',
        'email',
        'cover_later',
        'resume',
        'user_id',
        'status',
    ];
}