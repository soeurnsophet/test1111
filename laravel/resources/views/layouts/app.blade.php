<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Laravel App')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('includes.navbar')

    <div class="d-flex">

        <aside style="width: 250px; min-height: calc(100vh - 56px);">
            @include('includes.sidebar')
        </aside>

        <main class="flex-grow-1 p-5">
            @yield('content')
        </main>

    </div>

</body>

</html>
