<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- @include("partials.header") -->
    <main class="flex-grow-1 d-flex flex-column">
        <div class="row g-0 flex-grow-1">
            <div class="col-2 bg-light shadow-sm border-end">
                <div class="sticky-top">
                    <h4 class="p-5 pb-0">Menu</h4>
                    <ul class="p-5 pt-2 list-unstyled">
                        <li class="mb-2"><a href="{{route('admin.dashboard')}}" class="text-decoration-none text-dark">Home</a></li>
                        <li class="mb-2"><a href={{route('admin.profile')}} class="text-decoration-none text-dark">Gestisci profilo</a></li>
                        <li class="mb-2"><a href={{route('projects.index')}} class="text-decoration-none text-dark">Gestisci progetti</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-10">
            @yield("content")
            </div>
    </main>
    <!-- @include("partials.footer") -->


</body>

</html>