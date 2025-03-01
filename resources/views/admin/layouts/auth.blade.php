<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png">
        <title>Admin Panel - Psychological Test</title>
        <meta name="description" content="Admin Panel Psychological Test by Star IT" />
        <meta name="author" content="Star IT" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        {{-- style --}}
        @stack('prepend-style')
        @stack('addon-style')

        @vite('resources/css/app.css')
    </head>
    <body class="hidden lg:block">
        @include('sweetalert::alert')

        <header class="w-full pt-20 flex flex-col gap-7 justify-center items-center font-poppins text-gray-800 relative">
            <div class="absolute left-5 top-4">
                <img src="/assets/images/star.png" alt="logo" class="w-28">
            </div>
        </header>

        <!-- content -->
        @yield('container')

        {{-- script --}}
        @stack('prepend-script')
        @stack('addon-script')
    </body>
</html>