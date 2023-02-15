@extends('layouts.solar')
@section('content')


<div class="col-md-6 row mx-auto row">
    <div class="card text-white bg-success mb-3" style="max-width: 40rem;">
        <div class="card-header card-title mt-3">Rola: </div>
        <div class="">
            <div class="form-group">
                <h2> Naziv role:
                    {{ $role->name }}</h2>
            </div>
            <div class="form-group">
                <h2 class="card-title">Dozvole: 
                
                    @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }},</label>
                    @endforeach
                @endif
                </h2>
            </div>
            
        </div>
        <div class="text-center card-header mb-3">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Natrag</a>
        </div>
      </div>
</div>


@endsection