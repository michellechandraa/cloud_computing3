<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-full max-w-sm p-8 bg-white rounded-xl shadow-md border border-gray-300">
        <h2 class="text-2xl font-bold mb-6">Sign in</h2>

        {{-- <form method="POST" action=""> --}}
        <form onsubmit="window.location.href='http://127.0.0.1:8000'; return false;">

            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-1">Email or mobile phone number</label>
                <input id="email" name="email" type="email"
                       class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       required autofocus>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-bold mb-1">Password</label>
                <input id="password" name="password" type="password"
                       class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                       required>
            </div>

            <button type="submit"
                    class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 rounded-full transition">
                Sign in
            </button>
        </form>

        <div class="mt-8 text-center text-sm text-gray-600">
            <hr class="my-4">
            <span class="text-xs text-gray-500">New to our site?</span>
            <a href="http://127.0.0.1:8000/register"
               class="block mt-4 border border-gray-400 rounded-full py-2 hover:bg-gray-100">
                Create your account
            </a>
        </div>
    </div>

</body>
</html>