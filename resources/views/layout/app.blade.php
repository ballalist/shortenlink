<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Short URL</title>
        <link href="/css/app.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        @livewireStyles
    </head>
    <body>
        <div class="h-screen w-full flex justify-center items-center bg-gray-800">
            @yield('content')
        </div>
        <script src="/js/app.js"></script>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
