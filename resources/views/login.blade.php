<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restricted Login - Terebinime</title>
    <link rel="shortcut icon" href="{{ asset('img/terebi.png') }}" type="image/png">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/main.css">

<body class="bg-gray-900 leading-normal tracking-normal">
    <div class="flex items-center justify-center h-screen">

        <!-- component -->
        <div class="bg-gray-800 shadow-lg rounded px-8 py-6 mb-4 flex flex-col items-center">
            <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none bg-gray-900 rounded w-full py-2 px-3 text-white" id="username"
                    type="text" placeholder="Username">
            </div>
            <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none bg-gray-900 rounded w-full py-2 px-3 text-white" id="password"
                    type="password" placeholder="•••••••••••">
            </div>
            <div class="flex items-center justify-center">
                <button
                    class="bg-blue-600 hover:bg-white hover:text-blue-600 hover:border-blue-600 text-white font-bold py-2 px-4 rounded"
                    type="button">
                    Sign In
                </button>
            </div>
        </div>

    </div>

</body>

</html>
