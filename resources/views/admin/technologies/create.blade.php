@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container-fluid container-md py-3 py-md-5">
        <div class="mb-md-4">
            <a href="{{ route('admin.technologies.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i> Torna alla lista
            </a>
        </div>

        <div class="card shadow-sm border mt-3 mt-md-5">
            <div class="card-header py-4 text-center">
                <h2 class="text-secondary mb-0">Nuova Tecnologia</h2>
            </div>

            <div class="card-body p-md-5 py-3">
                <form action="{{ route('admin.technologies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label fw-bold">Nome Tecnologia</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Es: Laravel, Vue.js..." required>
                    </div>

                    
                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold">Descrizione</label>
                        <textarea name="description" id="description" rows="3" class="form-control" placeholder="Descrivi l'utilizzo di questa tecnologia..."></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="img_url" class="form-label fw-bold">Icona / Logo (Immagine)</label>
                        <input type="file" id="img_url" name="img_url" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="color" class="form-label fw-bold">Colore</label>
                        <input type="color" name="color" id="color" class="form-control form-control-color border-0 px-0 w-10" value="#000000">
                    </div>
                    
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success px-5">Salva Tecnologia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection