@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container py-5">
        <div class="mb-4">
            <a href="{{ route('admin.technologies.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i> Annulla modifica
            </a>
        </div>

        <div class="card shadow-sm border mt-5">
            <div class="card-header py-4 text-center">
                <h2 class="text-secondary mb-0">Modifica Tecnologia: {{ $technology->name }}</h2>
            </div>

            <div class="card-body p-5 py-3">
                <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="form-label fw-bold">Nome Tecnologia</label>
                        <input type="text" name="name" id="name" class="form-control" 
                               value="{{ $technology->name }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold">Descrizione</label>
                        <textarea name="description" id="description" rows="3" class="form-control">{{ $technology->description }}</textarea>
                    </div>

                    @if ($technology->img_url)
                        <div class="mb-2">
                            <label class="d-block fw-bold small text-uppercase text-muted">Icona attuale</label>
                            <img src="{{ asset('storage/' . $technology->img_url) }}" 
                                 style="width: 80px; height: 80px; object-fit: contain;" class=" p-3 ">
                        </div>
                    @endif

                    <div class="mb-4">
                        <label for="img_url" class="form-label fw-bold">Sostituisci Icona / Logo</label>
                        <input type="file" id="img_url" name="img_url" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label for="color" class="form-label fw-bold">Colore</label>
                        <input type="color" name="color" id="color" 
                               class="form-control form-control-color border-0 px-0 w-10" 
                               value="{{ $technology->color }}">
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-warning px-5 fw-bold text-uppercase">Aggiorna Tecnologia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection