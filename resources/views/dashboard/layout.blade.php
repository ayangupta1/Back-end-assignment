<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloggers.com</title>
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
    @livewireStyles
    <style>[x-cloak]{display:none}</style>
</head>
<body class="h-full min-h-screen antialiased">

    <div class="flex justify-center w-full min-h-screen">

        @include("dashboard.sidebar")
        @yield("content");
    </div>
    @include("dashboard.notifications")
    <script src="//unpkg.com/alpinejs" defer></script>
    @include("dashboard.js")
    @livewireScripts

</body>
</html>
