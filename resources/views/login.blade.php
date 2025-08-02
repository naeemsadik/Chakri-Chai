<x-layout>
    <div class="min-h-screen bg-gradient-to-r from-emerald-100 to-emerald-50 py-10 flex items-center justify-center">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-emerald-700 mb-6 text-center">Login</h1>

            @if (session('error'))
                <p class="text-red-600 mb-4 text-sm">{{ session('error') }}</p>
            @endif

            <form method="POST" action="{{ route('login.handle') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700 font-medium">Email</label>
                    <input type="email" name="email" class="w-full mt-1 p-2 border border-gray-300 rounded" required autofocus>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium">Password</label>
                    <input type="password" name="password" class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        <span class="text-sm text-gray-600">Remember Me</span>
                    </label>

                    <a href="#" class="text-sm text-emerald-600 hover:underline">Forgot Password?</a>
                </div>

                <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded hover:bg-emerald-700 transition">
                    Login
                </button>
            </form>

            <p class="mt-6 text-sm text-center text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-emerald-600 hover:underline">Sign up</a>
            </p>
        </div>
    </div>
</x-layout>
