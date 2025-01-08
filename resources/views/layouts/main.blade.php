<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle') - HMS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/css/main.css') }}">

    <script src="{{ URL::asset('assets/js/chart.js') }}"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100">
    <div id="content-area" class="grid gap-4 grid-rows-[auto_1fr] grid-cols-[250px_1fr] h-screen overflow-hidden p-3">
        <header class="shadow-lg rounded-md  bg-white p-3">
            @include('includes.header')
        </header>
        <aside class="sidebar shadow-lg rounded-md row-start-1 row-end-4 p-3 overflow-y-auto overflow-x-hidden bg-white">
            @include('includes.sidebar')
        </aside>
        <main class="h-full shadow-lg rounded-md row-start-2 row-end-4 p-3 bg-white">
            <div id="main">
                @yield('content')
            </div>
        </main>
    </div> 
</body>

</html>
