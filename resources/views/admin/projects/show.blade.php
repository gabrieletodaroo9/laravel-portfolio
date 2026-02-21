@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container py-5">

        <div class="mb-4">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i> Torna alla lista
            </a>
        </div>

        <div class="card shadow-sm border mt-5 overflow-hidden">

            <div class="card-header py-4">
                <div class="d-flex justify-content-between align-items-center gap-3">
                    <h3 class="text-secondary text-uppercase text-dark ms-2 mb-0">{{ $project->title }}</h3>

                    <span class="badge rounded-pill text-uppercase px-3 py-2 text-white"
                        style="background-color: {{ $project->type->color }};">
                        <strong>{{ $project->type->name }}</strong> project
                    </span>
                </div>
            </div>
            <div class="card-body p-5">
                @if ($project->img_url)
                    <div class="project-img w-50 mx-auto mb-4">
                        <img src="{{ asset('storage/' . $project->img_url) }}" class="img-fluid rounded shadow-sm">
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-8 d-flex flex-column justify-content-center align-items-center w-100">
                        <h5 class="text-uppercase text-muted small fw-bold mb-3">Descrizione del Progetto</h5>
                        <p class="lead text-secondary mb-5 pb-4">
                            {{ $project->description }}
                        </p>


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

            <div class="card-footer bg-light p-3 d-flex justify-content-center gap-3">
                <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-warning px-4">Modifica Progetto</a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Elimina progetto</button>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminazione in corso</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body py-5">
                            Sei sicuro di voler eliminare definitivamente questo progetto?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                            <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina definitivamente</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
