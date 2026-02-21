@extends("admin.adminLayouts.dashboardLayout")

@section("content")
<div class="container py-5">
    {{-- Bottone per tornare indietro --}}
    <div class="mb-4">
        <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="fa-solid fa-arrow-left"></i> Torna alla lista
        </a>
    </div>

    <div class="card shadow-sm border mt-5 overflow-hidden">
        {{-- Header della Card con Titolo --}}
        <div class="card-header py-4 text-center">
            <h1 class="text-secondary mb-0">{{ $project->title }}</h1>
        </div>

        <div class="card-body p-5">
            <div class="row">
                <div class="col-md-8 d-flex flex-column justify-content-center align-items-center w-100">
                    <h5 class="text-uppercase text-muted small fw-bold mb-3">Descrizione del Progetto</h5>
                    <p class="lead text-secondary mb-5">
                        {{ $project->description }}
                    </p>

                    <hr class="my-4">

                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                        <div class="text-center">
                            <h6 class="fw-bold mb-1"> <i class="bi bi-github"></i> Repository GitHub:</h6>
                            <a href="{{ $project->link_github }}" target="_blank" class="text-decoration-none">
                                <i class="fa-brands fa-github text-dark"></i> {{ $project->link_github }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer della Card con azioni (Modifica/Elimina) --}}
        <div class="card-footer bg-light p-3 d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-warning px-4">Modifica Progetto</a>
            <button class="btn btn-danger px-4">Elimina Progetto</button>
        </div>
    </div>
</div>
@endsection