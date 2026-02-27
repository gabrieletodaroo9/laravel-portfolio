@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container py-4 py-md-5">

        <h1 class="text-center display-4 text-uppercase mb-3 mb-md-5">Tecnologie progetti</h1>
        <a href="{{ route('admin.technologies.create') }}" class="btn btn-outline-success btn-sm mb-md-4">
            Aggiungi Tecnologia
        </a>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 g-md-5 mb-5">
            @foreach ($techs as $tech)
                <div class="col">
                    <div class="card bg-light h-100 shadow-sm border-0"
                        style="border-top: 5px solid {{ $tech->color }} !important;">
                        <div class="card-body p-2 d-flex flex-column">

                            <div class="d-flex justify-content-center gap-4 align-items-start mb-3 py-3">
                                @if ($tech->img_url)
                                    <img src="{{ asset('storage/' . $tech->img_url) }}" alt="{{ $tech->name }}"
                                        style="height: 40px; width: auto;" class="object-fit-contain">
                                @else
                                    <span class="text-muted small italic">No icon</span>
                                @endif
                                <h4 class="fw-bold text-dark text-center mb-0">{{ $tech->name }}</h4>
                            </div>

                            <p class="text-secondary text-center small flex-grow-1">
                                {{ Str::limit($tech->description, 100, '...') }}
                            </p>

                            <hr>

                            <div class="mt-2 d-flex justify-content-center gap-2">
                                <a href="{{ route('admin.technologies.show', $tech) }}"
                                    class="btn btn-sm btn-outline-secondary">
                                    <i class="fa-solid fa-eye"></i> Vedi
                                </a>
                                <a href="{{ route('admin.technologies.edit', $tech) }}"
                                    class="btn btn-sm btn-outline-warning">
                                    <i class="fa-solid fa-pen"></i> Modifica
                                </a>

                                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete-modal-{{ $tech->id }}">
                                    <i class="fa-solid fa-trash"></i> Elimina
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="delete-modal-{{ $tech->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-uppercase">Elimina Tecnologia</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body py-4">
                                Sei sicuro di voler eliminare definitivamente <strong>{{ $tech->name }}</strong>?<br>
                                <span class="text-danger small">L'azione rimuoverà questa tecnologia da tutti i progetti
                                    associati.</span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{ route('admin.technologies.destroy', $tech) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Conferma Eliminazione</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    </div>
@endsection
