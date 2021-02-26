@extends('adminlte::auth.verify')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirme su Contraseña') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un link de validacion a su correo electronico.') }}
                        </div>
                    @endif

                    {{ __('Luego de proceder, valide su correo electronico en busca de un link de confirmacion.') }}
                    {{ __('no recibio el correo?') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click aqui para enviar otro solicitud') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
