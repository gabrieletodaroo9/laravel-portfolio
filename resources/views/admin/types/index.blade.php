@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container py-5">
        <div class="mb-5">
            <h1 class="text-center display-4 text-uppercase">Categorie Progetti</h1>
        </div>

        <a href="{{ route('admin.types.create') }}" class="btn btn-outline-success btn-sm mb-5">Aggiungi nuovo tipo</a>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
            @foreach ($types as $type)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0" >
                        <div class="card-body d-flex flex-column">

                            <h5 class="card-title fw-bold"style="color:{{ $type->color }}" >{{ $type->name }}</h5>

                            <p class="card-text text-secondary flex-grow-1">
                                Progetti associati: {{ $type->projects->count() }}
                            </p>

                            <hr>

                            <div class="mt-auto d-flex justify-content-around align-items-center">
                                <a href="{{ route('admin.types.show', $type) }}" class="btn btn-sm btn-outline-dark"
                                    title="Vedi">
                                    <i class="bi bi-eye me-2"></i>Visualizza
                                </a>
                                <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-sm btn-outline-warning"
                                    title="Modifica">
                                    <i class="bi bi-pen me-2"></i>Modifica
                                </a>

                                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $type->id }}">
                                    <i class="bi bi-trash"></i> Elimina
                                </button>

                                <div class="modal fade" id="deleteModal{{ $type->id }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel{{ $type->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModalLabel{{ $type->id }}">
                                                    Eliminazione Categoria
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body py-5 text-start">
                                                Sei sicuro di voler eliminare definitivamente la categoria
                                                <strong>{{ $type->name }}</strong>?
                                                <br>
                                                <small class="text-danger">Attenzione: i progetti associati rimarranno senza
                                                    categoria.</small>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Annulla</button>
                                                <form action="{{ route('admin.types.destroy', $type) }}" method="POST">
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
