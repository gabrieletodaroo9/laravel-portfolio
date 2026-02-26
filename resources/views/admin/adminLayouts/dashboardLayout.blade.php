<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <main class="flex-grow-1 d-flex">
        <div class="container-fluid">
            <div class="row">
                @include('partials.sidebar')

                <div class="col-12 col-lg-10 p-0">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</body>

</html>
