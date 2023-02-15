@extends('layouts.solar')
@section('content')
<div class="col-md-6 row mx-auto">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Dodaj novog korisnika</h2>
        </div>
        {{-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Natrag</a>
        </div> --}}
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger col-md-6 mx-auto">
        <strong>Greška</strong> Imate greške pri unosu.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="form-group col-md-6 mx-auto row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-form-label mt-1" for="name">Ime: </label>
            {!! Form::text('name', null, array('placeholder' => 'Ime','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-form-label mt-1" for="email">Email: </label>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-form-label mt-1" for="password">Lozinka: </label>
            {!! Form::password('password', array('placeholder' => 'Lozinka','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-form-label mt-1" for="confirm-password">Potvrdi lozinku: </label>
            {!! Form::password('confirm-password', array('placeholder' => 'Potvrdi lozinku','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-form-label mt-2 mb-2" for="confirm-password">Rola: </label>
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-select')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4 mb-2 ">
        <button type="submit" class="btn btn-primary">Pošalji</button>
        <a class="btn btn-primary" href="{{ route('users.index') }}"> Natrag</a>
    </div>
</div>
{!! Form::close() !!}

@endsection