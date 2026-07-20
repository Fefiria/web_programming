<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UKM Programming</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('guest.layouts.navbar')

    <div class="container py-5">
        @if (isset($slot))
            {{ $slot }}
        @else
            @yield('content')
        @endif
    </div>

    @include('guest.layouts.footer')

</body>

</html>
