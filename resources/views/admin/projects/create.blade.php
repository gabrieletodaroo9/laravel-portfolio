@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container-fluid container-md py-5">
        <div class="mb-4">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i> Torna alla lista
            </a>
        </div>

        <div class="card shadow-sm border mt-5">
            <div class="card-header py-4 text-center">
                <h2 class="text-secondary mb-0">Nuovo Progetto</h2>
            </div>

            <div class="card-body p-md-5 py-3">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="form-label fw-bold">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label for="link_github" class="form-label fw-bold">Link GitHub</label>
                        <input type="url" name="link_github" id="link_github" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold">Descrizione</label>
                        <textarea name="description" id="description" rows="3" class="form-control" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="type_id" class="form-label fw-bold">Tipologia progetto</label>
                        <select id="type_id" name="type_id" class="form-control">
                            <option value="">Seleziona una tipologia...</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <h6 class="fw-bold">Tecnologie utilizzate:</h6>
                    <div class="form-control mb-4 d-flex flex-wrap gap-4 border-0">
                        @foreach ($techs as $tech)
                            <div>
                                <input type="checkbox" name="techs[]" value="{{ $tech->id }}"
                                    id="tag-{{ $tech->id }}">
                                <label for="tag-{{ $tech->id }}">{{ $tech->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <div class="mb-3">
                        <label for="img_url">Immagine</label>
                        <input type="file" id="img_url" name="img_url" class="form-control">
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-success px-5 small">Salva Progetto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
