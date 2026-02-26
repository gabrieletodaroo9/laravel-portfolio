@extends('admin.adminLayouts.dashboardLayout')

@section('content')
<div class="main-content container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="display-5 py-5 text-uppercase mb-0">Messaggi Ricevuti</h1>
        </div>
        <span class="badge bg-dark text-white px-3 py-2 rounded-pill fs-6">
            Totale: {{ $messages->count() }}
        </span>
    </div>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr class="text-secondary small text-uppercase">
                        <th class="px-4 py-3">da</th>
                        <th>Email</th>
                        <th>Data</th>
                        <th class="text-end px-4">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($messages as $msg)
                        <tr>
                            <td class="px-4">
                                <div class="fw-bold text-dark">{{ $msg->name }}</div>
                            </td>
                            <td>
                                <a href="mailto:{{ $msg->email }}" class="text-decoration-none text-orange">
                                    {{ $msg->email }}
                                </a>
                            </td>
                            <td class="text-secondary">
                                {{ $msg->created_at->format('d/m/Y H:i') }}
                            </td>
                            <td class="text-end px-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin.messages.show', $msg->id) }}" 
                                       class="btn btn-sm btn-outline-dark rounded-2">
                                        Leggi
                                    </a>

                                    <button type="button" class="btn btn-sm btn-danger rounded-2" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#deleteModal{{ $msg->id }}">
                                        Elimina
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <div class="modal fade" id="deleteModal{{ $msg->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $msg->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border-0 shadow">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="deleteModalLabel{{ $msg->id }}">Eliminazione messaggio</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body py-4 text-center">
                                        Sei sicuro di voler eliminare definitivamente il messaggio di <br>
                                        <strong>{{ $msg->name }}</strong>?
                                        <p class="text-danger small mt-2 mb-0">L'azione non può essere annullata.</p>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Elimina definitivamente</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-5 text-secondary">
                                <i class="fa-solid fa-inbox fs-1 d-block mb-2"></i>
                                Non ci sono messaggi disponibili.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection