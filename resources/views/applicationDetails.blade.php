<x-layout>
    <div class="min-h-screen bg-gradient-to-r from-emerald-100 to-emerald-50 py-10">
        <div class="max-w-3xl mx-auto px-6 bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-emerald-700 mb-6">Application Details</h1>

            <div class="space-y-4 text-gray-800">
                <div>
                    <span class="font-semibold">Full Name:</span> {{ $application->full_name }}
                </div>

                <div>
                    <span class="font-semibold">Email:</span> {{ $application->email }}
                </div>

                <div>
                    <span class="font-semibold">Status:</span> {{ ucfirst($application->status) }}
                </div>

                <div>
                    <span class="font-semibold">Cover Letter:</span>
                    <div class="mt-2 p-4 bg-gray-100 border border-gray-200 rounded">
                        {{ $application->cover_letter }}
                    </div>
                </div>

                <div>
                    <span class="font-semibold">Resume:</span>
                    <a href="{{ Storage::url($application->resume) }}" target="_blank" class="text-emerald-600 underline ml-2">
                        View Resume (PDF)
                    </a>
                </div>
            </div>

            <div class="mt-8 flex justify-between items-center">
                <a href="{{ route('application.list', $application->job_id) }}" class="text-emerald-600 hover:underline">
                    ← Back to Applications List
                </a>
                {{-- <a href="{{ route('application.approve', $application->id) }}" class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 transition">
                    Approve
                </a> --}}
                <form action="{{ route('application.approve', $application->id) }}" method="POST" class="">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 transition">
                        Approve
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
