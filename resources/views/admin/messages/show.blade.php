@extends('admin.adminLayouts.dashboardLayout')

@section('content')
<div class="main-content container py-4 py-md-5">

    <div class="mb-4">
        <a href="{{ route('admin.messages.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="fa-solid fa-arrow-left"></i> Torna alla lista messaggi
        </a>
    </div>

    <div class="card shadow-sm border mt-4 mt-md-5 overflow-hidden rounded-4">

        <div class="card-header py-4 bg-white">
            <div class="d-flex justify-content-between align-items-center gap-3">
                <div class="d-flex align-items-center">
                    <h3 class="text-uppercase mb-0 fw-bold text-dark">
                        {{ $message->name }}
                    </h3>
                </div>
                <span class="badge rounded-pill text-uppercase px-3 py-2 text-white bg-dark">
                    Ricevuto il <strong>{{ $message->created_at->format('d/m - H:i') }}</strong>
                </span>
            </div>
        </div>

        <div class="card-body p-md-5">
            <div class="mb-4">
                <p class="text-secondary small text-uppercase fw-bold mb-2">Email:</p>
                <a href="mailto:{{ $message->email }}" class="h5 text-primary text-decoration-none">
                    {{ $message->email }}
                </a>
            </div>

            <hr class="my-4 my-md-5">

            <div class="message-content">
                <p class="text-secondary small text-uppercase fw-bold">Contenuto:</p>
                <div class="p-2 bg-light rounded-3 lead" style=" border: 1px solid #eee;">
                    {{ $message->message }}
                </div>
            </div>
        </div>

        <div class="card-footer bg-light p-4 d-flex justify-content-center gap-3">
            <button type="button" class="btn btn-outline-danger px-4 fw-bold" data-bs-toggle="modal"
                data-bs-target="#deleteMessageModal">
                Elimina
            </button>
        </div>

        <div class="modal fade" id="deleteMessageModal" tabindex="-1" aria-labelledby="deleteMessageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-lg">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteMessageModalLabel">Conferma Eliminazione</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-5 text-center">
                        <p class="mb-0">Sei sicuro di voler eliminare definitivamente il messaggio di <strong>{{ $message->name }}</strong>?</p>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger px-4">Elimina definitivamente</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection