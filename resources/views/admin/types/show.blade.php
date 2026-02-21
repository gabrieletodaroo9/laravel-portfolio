@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container py-5">

        <div class="mb-4">
            <a href="{{ route('admin.types.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i> Torna alla lista tipi
            </a>
        </div>

        <div class="card shadow-sm border mt-5 overflow-hidden">

            <div class="card-header py-4">
                <div class="d-flex justify-content-between align-items-center gap-3">
                    <h3 class="text-uppercase ms-2 mb-0" style="color:{{ $type->color }}">{{ $type->name }}</h3>

                    <span class="badge rounded-pill text-uppercase px-3 py-2 text-white bg-dark">
                        <strong>{{ $type->projects->count() }}</strong> progetti trovati
                    </span>
                </div>
            </div>

            <div class="card-body p-5">
                
                <h4 class="text-center text-uppercase mb-4">Progetti appartenenti a questa categoria</h4>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @forelse ($type->projects as $project)
                        <div class="col">
                            <div class="card h-100 border shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                                    <p class="card-text text-secondary small">
                                        {{ Str::limit($project->description, 150) }}
                                    </p>
                                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-outline-dark">
                                        Vai al progetto
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 w-100">
                            <div class="alert alert-light border text-center text-muted">
                                Nessun progetto è attualmente associato a questa categoria.
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="card-footer bg-light p-3 d-flex justify-content-center gap-3">
                <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-outline-warning px-4">Modifica Tipo</a>
                
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteTypeModal">Elimina Tipo</button>
            </div>

            <div class="modal fade" id="deleteTypeModal" tabindex="-1" aria-labelledby="deleteTypeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deleteTypeModalLabel">Eliminazione in corso</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body py-5 text-center">
                            Sei sicuro di voler eliminare definitivamente il tipo <strong>{{ $type->name }}</strong>?
                            <p class="text-danger small mt-2">I progetti associati non verranno eliminati, ma diventeranno "Senza Tipo".</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form action="{{ route('admin.types.destroy', $type) }}" method="POST">
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