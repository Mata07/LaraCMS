@extends('layouts.solar')

@section('content')
<div class="container">
    <div class="row justify-content-center p-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potvrdite email adresu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Poslali smo vam link na email adresu.') }}
                        </div>
                    @endif

                    {{ __('Prije nastavka provjerite email poruke.') }}
                    {{ __('Ako niste primili email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kliknite da Vam pošaljemo novi.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
