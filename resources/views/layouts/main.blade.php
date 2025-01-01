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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100">
    <div id="content-area" class="grid gap-4 grid-rows-[50px_1fr] grid-cols-[250px_1fr] h-screen overflow-hidden p-3">
        <header class="shadow-lg rounded-md p-3 bg-white">
            @include('includes.header')
        </header>
        <aside class="sidebar shadow-lg rounded-md row-start-1 row-end-4 p-3 bg-white">
            @include('includes.sidebar')
        </aside>
        <main>
            <div id="main" class="h-full shadow-lg rounded-md p-3 bg-white">
                @yield('content')
            </div>
        </main>
        <footer class="col-start-2 shadow-lg rounded-md p-3 bg-white">
            @include('includes.footer')
        </footer>
    </div> 
</body>

</html>
