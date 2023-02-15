@extends('layouts.solar')
@section('content')
<div class="col-md-6 row mx-auto">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Uredi rolu</h2>
        </div>
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger col-md-6 mx-auto">
        <strong>Opa!</strong> Dogodila se greška!<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="form-group col-md-6 mx-auto row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-form-label mt-1" for="name">Naziv: </label>
            {!! Form::text('name', null, array('placeholder' => 'Naziv','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-form-label mt-1" for="permission">Dozvole: </label>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4 mb-2">
        <button type="submit" class="btn btn-primary">Pošalji</button>
        <a class="btn btn-primary" href="{{ route('roles.index') }}"> Natrag</a>
    </div>
</div>
{!! Form::close() !!}
@endsection
