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

        <section class="h-screen w-full relative px-0 lg:px-4 py-2 lg:py-3">
            <div class="flex flex-row px-0 lg:px-5 py-3 relative lg:absolute z-30">
                {{-- sidebar --}}
                @include('admin.includes.sidebar')
    
                <!-- content -->
                @yield('container')
            </div>
    
        </section>

        {{-- script --}}
        @stack('prepend-script')
        @stack('addon-script')
    </body>
</html>