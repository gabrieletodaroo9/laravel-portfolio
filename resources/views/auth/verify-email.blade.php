@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border">
                <div class="card-header py-3">
                    <h5 class="mb-0">{{ __('Verifica il tuo indirizzo Email') }}</h5>
                </div>

                <div class="card-body p-4">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Un nuovo link di verifica è stato inviato al tuo indirizzo email.') }}
                    </div>
                    @endif

                    <p>{{ __('Prima di procedere, per favore controlla la tua email per il link di verifica.') }}</p>
                    <p class="mb-0">
                        {{ __('Se non hai ricevuto l\'email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clicca qui per richiederne un\'altra') }}</button>.
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection