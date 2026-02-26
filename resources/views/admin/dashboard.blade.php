@extends("admin.adminLayouts.dashboardLayout")

@section("content")
<div class="container py-5">
    <div class="mb-5">
        <h1 class="text-center display-4 text-uppercase mb-5">Dashboard</h1>
    </div>

    <div class="row g-5 mb-5">
        <div class="col-md-3 pt-5">
            <div class="card shadow border-0 h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="p-1">
                        <h6 class="text-uppercase text-muted small fw-bold mb-2">Progetti</h6>
                        <h2 class="fw-bold mb-0">{{ $projects_count ?? '0' }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pt-5">
            <div class="card shadow border-0 h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="p-1">
                        <h6 class="text-uppercase text-muted small fw-bold mb-2">Tipologie</h6>
                        <h2 class="fw-bold mb-0">{{ $types_count ?? '0' }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pt-5">
            <div class="card shadow border-0 h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="p-1">
                        <h6 class="text-uppercase text-muted small fw-bold mb-2">Tecnologie</h6>
                        <h2 class="fw-bold mb-0">{{ $techs_count ?? '0' }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 pt-5">
            <div class="card shadow border-0 h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="p-1">
                        <h6 class="text-uppercase text-muted small fw-bold mb-2">Messaggi</h6>
                        <h2 class="fw-bold mb-0">{{ $messages_count ?? '0' }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <h4 class="display-6 text-uppercase mt-5">Azioni Rapide</h4>
    <div class="d-flex justify-content-start align-items-center gap-5 mt-5 flex-wrap">
        <div>
            <a href="{{ route('admin.projects.index') }}" class="btn w-auto py-3 shadow border-0">
                Lista Progetti
            </a>
        </div>
        <div>
            <a href="{{ route('admin.types.index') }}" class="btn w-auto py-3 shadow border-0">
                Lista Tipi
            </a>
        </div>
        <div>
            <a href="{{ route('admin.technologies.index') }}" class="btn w-auto py-3 shadow border-0">
                Lista Tecnologie
            </a>
        </div>
        <div>
            <a href="{{ route('admin.messages.index') }}" class="btn w-auto py-3 shadow border-0">
                Lista Messaggi
            </a>
        </div>
        <div>
            <a href="{{ route('admin.projects.create') }}" class="btn w-auto py-3 shadow border-0">
                Aggiungi Progetto
            </a>
        </div>
        <div>
            <a href="{{ route('admin.types.create') }}" class="btn w-auto py-3 shadow border-0">
                Aggiungi Tipo
            </a>
        </div>
        <div>
            <a href="{{ route('admin.technologies.create') }}" class="btn w-auto py-3 shadow border-0">
                Aggiungi Tecnologia
            </a>
        </div>
    </div>
</div>
@endsection