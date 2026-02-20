@extends("admin.adminLayouts.dashboardLayout")

@section("content")
<div class="container py-5">
    <div class="mb-5">
        <h1 class="text-center display-4">I Miei Progetti</h1>
        <p class="text-center text-muted">Gestione del portfolio database</p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
        @foreach($projects as $project)
        <div class="col">
            <a href="{{route('projects.show')}}" class="text-decoration-none h-100">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-dark">{{ $project->title }}</h5>
                        <p class="card-text text-secondary flex-grow-1">
                            {{ Str::limit($project->description, 100) }}
                        </p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection