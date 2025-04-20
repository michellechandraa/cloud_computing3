<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-full max-w-sm p-8 bg-white rounded-xl shadow-md border border-gray-300">
        <h2 class="text-2xl font-bold mb-6">Create account</h2>

        {{-- <form method="POST" action="{{ route('register') }}"> --}}
        <form onsubmit="window.location.href='http://127.0.0.1:8000/login'; return false;">

            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-1">Your name</label>
                <input id="name" name="name" type="text"
                       placeholder="First and last name"
                       class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-1">Email</label>
                <input id="email" name="email" type="email"
                       class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       required>
            </div>

            <div class="mb-1">
                <label for="password" class="block text-sm font-bold mb-1">Password</label>
                <input id="password" name="password" type="password"
                       placeholder="at least 8 characters"
                       class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       required>
            </div>

            <p class="flex items-center text-xs text-gray-600 mb-4 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 18h.01"/>
                </svg>
                Passwords must be at least 8 characters.
            </p>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-bold mb-1">Re-enter password</label>
                <input id="password_confirmation" name="password_confirmation" type="password"
                       class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       required>
            </div>

            <button type="submit"
                    class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 rounded-full transition">
                Create your account
            </button>
        </form>

        <div class="mt-8 text-center text-sm text-gray-600">
            <hr class="my-4">
            Already have an account? 
            <a href="http://127.0.0.1:8000/login" class="text-blue-600 hover:underline">Sign in</a>
        </div>
    </div>

</body>
</html>