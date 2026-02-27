@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container py-4 py-md-5">
        <div class="mb-4 mb-md-5">
            <h1 class="text-center display-4 text-uppercase">I Miei Progetti</h1>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-outline-success btn-sm mb-2 mb-md-5">Aggiungi nuovo
                progetto</a>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
            @foreach ($projects as $project)
                <div class="col pt-3 pt-md-0">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body d-flex flex-column">


                            <h5 class="card-title fw-bold text-dark">{{ $project->title }}</h5>
                            <p class="card-text text-secondary flex-grow-1">
                                {{ Str::limit($project->description, 100) }}
                            </p>

                            <div class="my-1 d-flex justify-content-end align-items-center">
                                <span class="badge rounded-pill text-uppercase px-3 py-2 text-white"
                                    style="background-color: {{ $project->type->color }};">
                                    <strong>{{ $project->type->name }}</strong> project
                                </span>
                            </div>
                            <hr>

                            <div class="mt-auto d-flex justify-content-around align-items-center">
                                <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-outline-dark"
                                    title="Vedi">
                                    <i class="bi-eye me-2"></i>Visualizza
                                </a>
                                <a href="{{ route('admin.projects.edit', $project) }}"
                                    class="btn btn-sm btn-outline-warning" title="Modifica">
                                    <i class=" bi-pen me-2"></i>Modifica
                                </a>
                                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $project->id }}">
                                    <i class="bi-trash"></i> Elimina
                                </button>

                                <div class="modal fade" id="deleteModal{{ $project->id }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel{{ $project->id }}" aria-hidden="true">

                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModalLabel{{ $project->id }}">
                                                    Eliminazione in corso
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body py-5">
                                                Sei sicuro di voler eliminare definitivamente
                                                <strong>{{ $project->title }}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Annulla</button>

                                                <form action="{{ route('admin.projects.destroy', $project) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Elimina
                                                        definitivamente</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
