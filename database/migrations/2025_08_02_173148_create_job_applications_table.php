<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->string('full_name');
            $table->string('email');
            $table->text('cover_letter')->nullable();
            $table->string('resume')->nullable(); // assuming it's a file path
            $table->string('status')->default('pending'); // e.g., pending, accepted, rejected
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('job_id')->references('id')->on('job_listings')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
