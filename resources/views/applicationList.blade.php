<x-layout>
    <div class="min-h-screen bg-gradient-to-r from-emerald-100 to-emerald-50 py-10">
        <div class="max-w-4xl mx-auto px-6 bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-emerald-700 mb-6">Applications for {{ $job->title }}</h1>

            <p class="text-gray-700 mb-6">
                <span class="font-semibold">Company:</span> {{ $job->company }}<br>
                <span class="font-semibold">Location:</span> {{ $job->location }}<br>
                <span class="font-semibold">Type:</span> {{ $job->type }}<br>
                <span class="font-semibold">Salary:</span> {{ $job->salary }}
            </p>

            @if($applications->isEmpty())
                <p class="text-gray-600">No applications submitted yet.</p>
            @else
                <ul class="space-y-4">
                    @foreach ($applications as $application)
                        <li class="p-4 border border-gray-200 rounded shadow-sm bg-gray-50">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h2 class="text-lg font-semibold text-emerald-700">{{ $application->full_name }}</h2>
                                    <p class="text-sm text-gray-600">{{ $application->email }}</p>
                                    <p class="text-sm {{ ($application->status == 'pending') ? 'text-gray-500' : 'text-emerald-500' }}">Status: {{ ucfirst($application->status) }}</p>
                                </div>
                                <a href="{{ route('application.details', $application->id) }}"
                                   class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 transition">
                                    View Details
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif

            <div class="mt-8">
                <a href="{{ route('home') }}" class="text-emerald-600 hover:underline">← Back to Job Listings</a>
            </div>
        </div>
    </div>
</x-layout>
