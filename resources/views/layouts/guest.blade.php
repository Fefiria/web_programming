<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Programming</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100">
    <div class="min-h-screen flex items-center justify-center px-4 py-10">
        <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-lg">
            @if (isset($slot))
                {{ $slot }}
            @else
                @yield('content')
            @endif
        </div>
    </div>
</body>

</html>
