<x-layout>
    <div class="min-h-screen bg-gradient-to-r from-emerald-100 to-emerald-50 py-10">
        <div class="max-w-3xl mx-auto px-6 bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-emerald-700 mb-6">Apply for {{ $job->title }}</h1>

            <p class="text-gray-700 mb-6">
                <span class="font-semibold">Company:</span> {{ $job->company }}<br>
                <span class="font-semibold">Location:</span> {{ $job->location }}<br>
                <span class="font-semibold">Type:</span> {{ $job->type }}<br>
                <span class="font-semibold">Salary:</span> {{ $job->salary }}
            </p>

            <form action="{{ route('application.store', ['job' => $job->id]) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700 font-medium">Full Name</label>
                    <input type="text" name="full_name" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Email Address</label>
                    <input type="email" name="email" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Cover Letter</label>
                    <textarea name="cover_letter" rows="5" class="w-full mt-1 p-2 border border-gray-300 rounded" required></textarea>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Resume (PDF)</label>
                    <input type="file" name="resume" accept=".pdf" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                </div>

                <button type="submit" class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 transition">
                    Submit Application
                </button>
            </form>

            <div class="mt-8">
                <a href="{{ route('home') }}" class="inline-block text-emerald-600 hover:underline">← Back to Job Listings</a>
            </div>
        </div>
    </div>
</x-layout>
