@extends('layouts.solar')
@section('content')
<div class="col-md-6 row mx-auto row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Napravi novu rolu</h2>
        </div>

    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="form-group col-md-6 mx-auto row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-form-label mt-2 mb-2" for="name">Naziv role: </label>
            {!! Form::text('name', null, array('placeholder' => 'Naziv role','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-form-label mt-2 mb-2" for="permission">Dozvole: </label>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
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