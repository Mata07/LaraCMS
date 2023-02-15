@extends('layouts.solar')
@section('content')

<div class="col-md-6 row mx-auto row">
    <div class="card text-white bg-success mb-3" style="max-width: 40rem;">
        <div class="card-header card-title mt-3">Korisnik: </div>
        <div class="card-body">
            <div class="form-group ">
                <h2> Ime i prezime:
                {{ $user->name }}</h2>
            </div>
            <div class="form-group">
                <h2> Email:
                    {{ $user->email }}</h2>
            </div>
            <div class="form-group card-title">
                <h2>Rola:
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                    @endforeach
                @endif
                </h2>
            </div>
            
        </div>
        <div class="text-center card-header mb-3">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Natrag</a>
        </div>
      </div>



   
</div>
@endsection