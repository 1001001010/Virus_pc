<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>virus pc</title>
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    @include('components.header')
    <main>
        @yield('content')
    </main>
    @include('components.footer', ['categories' => $categories])
</body>

</html>
