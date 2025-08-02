<x-layout>
    <div class="min-h-screen bg-gradient-to-r from-emerald-100 to-emerald-50 py-10">
        <div class="max-w-4xl mx-auto px-6 bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-emerald-700 mb-6">{{ $job->title }}</h1>

            <p class="text-gray-800 mb-3"><span class="font-semibold">Company:</span> {{ $job->company }}</p>
            <p class="text-gray-800 mb-3"><span class="font-semibold">Location:</span> {{ $job->location }}</p>
            <p class="text-gray-800 mb-3"><span class="font-semibold">Job Type:</span> {{ $job->type }}</p>
            <p class="text-gray-800 mb-3"><span class="font-semibold">Salary:</span> {{ $job->salary }}</p>

            <div class="mt-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">Job Description</h2>
                <p class="text-gray-700 leading-relaxed">{{ $job->description }}</p>
            </div>

            <div class="mt-8 flex justify-between items-center">
                <a href="{{ route('home') }}" class="inline-block px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 transition">
                    ← Back to Listings
                </a>
                <a href="{{ route('job.apply', $job) }}" class="inline-block px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 transition">Apply Now</a>
            </div>
        </div>
    </div>
</x-layout>
