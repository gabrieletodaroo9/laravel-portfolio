@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container py-5">
        <div class="mb-4">
            <a href="{{ route('admin.types.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i> Torna alla lista
            </a>
        </div>

        <div class="card shadow-sm border mt-5">
            <div class="card-header py-4 text-center">
                <h2 class="text-secondary mb-0">Modifica Tipo: {{ $type->name }}</h2>
            </div>

            <div class="card-body p-5 py-3">
                <form action="{{ route('admin.types.update', $type->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="form-label fw-bold">Nome della Categoria</label>
                        <input type="text" name="name" id="name" class="form-control" 
                               value="{{ $type->name }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="color" class="form-label fw-bold">Colore</label>
                        <input type="color" name="color" id="color" 
                               class="form-control form-control-color w-10 border-0 m-0 px-0" 
                               value="{{ $type->color }}">
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-warning px-5">Aggiorna Tipo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection