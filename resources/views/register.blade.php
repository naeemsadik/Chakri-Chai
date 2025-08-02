<x-layout>
    <div class="min-h-screen bg-gradient-to-r from-emerald-100 to-emerald-50 py-10 flex items-center justify-center">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-emerald-700 mb-6 text-center">Create an Account</h1>

            <form method="POST" action="{{ route('register.handle') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700 font-medium">Full Name</label>
                    <input type="text" name="name" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Email</label>
                    <input type="email" name="email" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Password</label>
                    <input type="password" name="password" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                </div>

                <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded hover:bg-emerald-700 transition">
                    Register
                </button>
            </form>

            <p class="mt-6 text-sm text-center text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="text-emerald-600 hover:underline">Login</a>
            </p>
        </div>
    </div>
</x-layout>
