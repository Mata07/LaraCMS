{{-- @extends('layouts.app') --}}
@extends('layouts.solar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Administracija Algebra CMS-a') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Prijavljeni ste') }}

                    
                </div>                
            </div>

            <div class="card">
                
                <div class="card-body">
                    <h2>Uredi: </h2>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('users.index') }}">Korisnike</a>
                    
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('roles.index') }}">Role</a>
                    
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('posts.index') }}">Objave</a>
                        
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
