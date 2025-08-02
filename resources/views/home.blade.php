<x-layout>
    <div class="min-h-screen bg-gradient-to-r from-emerald-300 to-emerald-100 py-10">
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Job Listings</h1>

            <ul class="space-y-6">
                @foreach ($jobs as $job)
                    <li class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow duration-300 flex justify-between items-center">
                        <div class="">
                            <h2 class="text-2xl font-semibold text-emerald-700 mb-2">{{ $job['title'] }}</h2>
                            <p class="text-gray-700 mb-1"><span class="font-medium">Company:</span> {{ $job['company'] }}</p>
                            <p class="text-gray-700 mb-1"><span class="font-medium">Location:</span> {{ $job['location'] }}</p>
                            <p class="text-gray-700 mb-1"><span class="font-medium">Type:</span> {{ $job['type'] }}</p>
                            <p class="text-gray-700"><span class="font-medium">Salary:</span> {{ $job['salary'] }}</p>
                            <p class="text-gray-700"><span class="font-medium">Description:</span> {{ $job->short_description }}</p>
                        </div>
                        <div class="">
                            <a href="{{ route('job.description', $job) }}" class="inline-block px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 transition">See Description</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="mt-8">
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</x-layout>
