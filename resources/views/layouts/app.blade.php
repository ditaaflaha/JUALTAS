<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('styles/flowbite.min.css') }}" rel="stylesheet" />
</head>
<body>

    @include('components.menu')

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">@yield('page_title')</h1>

        @yield('content')
    </div>

    <script src="{{ asset('styles/flowbite.min.js') }}"></script>
</body>
</html>
