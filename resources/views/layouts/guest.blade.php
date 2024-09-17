<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap">

        <!-- Scripts -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full">
        <div class="bg-white dark:bg-gray-800 flex flex-col sm:justify-center items-center">
            <!-- Form -->
            <div class="w-full sm:max-w-md mt-6 mb-6 px-6 bg-gray-900 shadow-md overflow-hidden sm:rounded-lg">
                <div class="mx-auto max-w-2xl py-12">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <script>
            const passwordInput = document.getElementById('password', 'password_confirmation');
            const togglePasswordButton = document.getElementById('togglePassword');

            togglePasswordButton.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password'; 'password_confirmation' ? 'text' : 'password_confirmation';
                passwordInput.setAttribute('type', type);
            });
        </script>
    </body>
</html>
