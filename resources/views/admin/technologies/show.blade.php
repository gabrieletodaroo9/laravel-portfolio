@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container py-5">

        <div class="mb-4">
            <a href="{{ route('admin.technologies.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i> Torna alla lista tecnologie
            </a>
        </div>

        <div class="card shadow-sm border mt-5 overflow-hidden">

            <div class="card-header py-4">
                <div class="d-flex justify-content-between align-items-center gap-3">
                    <div class="d-flex align-items-center">
                        @if ($technology->img_url)
                            <img src="{{ asset('storage/' . $technology->img_url) }}" alt="{{ $technology->name }}" 
                                 class="me-3" style="height: 50px; width: auto;">
                        @endif
                        <h3 class="text-uppercase mb-0" style="color:{{ $technology->color }}">
                            {{ $technology->name }}
                        </h3>
                    </div>

                    <span class="badge rounded-pill text-uppercase px-3 py-2 text-white bg-dark">
                        Utilizzata in <strong>{{ $technology->projects->count() }}</strong> progetti
                    </span>
                </div>
            </div>

            <div class="card-body p-5">
                
                @if($technology->description)
                    <div class="mb-5">
                        <p class="lead text-secondary">{{ $technology->description }}</p>
                    </div>
                    <hr class="my-5">
                @endif

                <h4 class="text-center text-uppercase mb-4">Progetti realizzati con {{ $technology->name }}</h4>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @forelse ($technology->projects as $project)
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
                                Al momento non ci sono progetti associati a questa tecnologia.
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="card-footer bg-light p-3 d-flex justify-content-center gap-3">
                <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn btn-outline-warning px-4">Modifica Tech</a>
                
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteTechModal">Elimina Tech</button>
            </div>

            <div class="modal fade" id="deleteTechModal" tabindex="-1" aria-labelledby="deleteTechModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deleteTechModalLabel">Eliminazione in corso</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body py-5 text-center">
                            Sei sicuro di voler eliminare definitivamente la tecnologia <strong>{{ $technology->name }}</strong>?
                            <p class="text-danger small mt-2">I progetti rimarranno intatti, ma non avranno più questo tag associato.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST">
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