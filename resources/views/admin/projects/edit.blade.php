@extends('admin.adminLayouts.dashboardLayout')

@section('content')
    <div class="container py-5">
        <div class="mb-4">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i> Torna alla lista
            </a>
        </div>

        <div class="card shadow-sm border mt-5">
            <div class="card-header py-4 text-center">
                <h2 class="text-secondary mb-0">Modifica Progetto</h2>
            </div>

            <div class="card-body p-5 py-3">
                <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="form-label fw-bold">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="{{ $project->title }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="link_github" class="form-label fw-bold">Link GitHub</label>
                        <input type="url" name="link_github" id="link_github" class="form-control"
                            value="{{ $project->link_github }}">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold">Descrizione</label>
                        <textarea name="description" id="description" rows="3" class="form-control" required>{{ $project->description }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="type_id" class="form-label fw-bold">Categoria</label>
                        <select id="type_id" name="type_id" class="form-control">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    @if ($project->img_url)
                        <div>
                            <img src="{{ asset('storage/' . $project->img_url) }}" style="width: 150px; height: auto;"
                                class="mb-3">
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="img_url">Immagine</label>
                        <input type="file" id="img_url" name="img_url" class="form-control">
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-warning px-5">Aggiorna Progetto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
