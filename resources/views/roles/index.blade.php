
@extends('layouts.solar')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Upravljanje rolama</h2>
        </div>
        <div class="pull-right mb-3 mt-3">
            @can('role-create')
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Napravi novu rolu</a>
                @endcan
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success col-md-6">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered ">
    <tr class="table-success">
        <th>Br</th>
        <th>Naziv</th>
        <th width="280px">Akcija</th>
    </tr>
@foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Pokaži</a>
            @can('user-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Uredi</a>
                @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Obriši', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endcan
            
        </td>
    </tr>
@endforeach
</table>
{!! $roles->render() !!}

@endsection

