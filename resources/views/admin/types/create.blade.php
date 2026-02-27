@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container-fluid container-md py-3 py-md-5">
        <div class="mb-md-4">
            <a href="{{ route('admin.types.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i> Torna alla lista
            </a>
        </div>

        <div class="card shadow-sm border mt-3 mt-md-5">
            <div class="card-header py-4 text-center">
                <h2 class="text-secondary mb-0">Nuovo Tipo di Progetto</h2>
            </div>

            <div class="card-body p-md-5 py-3">
                <form action="{{ route('admin.types.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label fw-bold">Nome della Categoria</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Es: Front-end, Full-stack, Design..." required>
                    </div>
                    <div class="mb-4">
                        <label for="color" class="form-label fw-bold">Colore</label>
                        <input type="color" name="color" id="color" class=" form-control form-control-color border-0 m-0 px-0 w-10"
                            value="{{ $type->color ?? '#000000' }}" title="Scegli un colore">
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-success px-5">Salva Tipo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
