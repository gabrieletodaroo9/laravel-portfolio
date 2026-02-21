@extends("admin.adminLayouts.dashboardLayout")

@section("content")
<div class="container py-5">
    <div class="mb-4">
        <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="fa-solid fa-arrow-left"></i> Torna alla lista
        </a>
    </div>

    <div class="card shadow-sm border mt-5">
        <div class="card-header py-4 text-center">
            <h2 class="text-secondary mb-0">Nuovo Progetto</h2>
        </div>

        <div class="card-body p-5 py-3">
            <form action="{{ route('projects.store') }}" method="POST">
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

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success px-5">Salva Progetto</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection