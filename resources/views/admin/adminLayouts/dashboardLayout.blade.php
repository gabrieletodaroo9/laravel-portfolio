<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
    <main class="flex-grow-1 d-flex flex-column">
        <div class="row g-0 flex-grow-1">
            @include('partials.sidebar')
            <div class="col-10">
                @yield('content')
            </div>
    </main>


</body>

</html>
