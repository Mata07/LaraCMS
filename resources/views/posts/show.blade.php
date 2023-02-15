@extends('layouts.solar')
@section('content')
    <div class="col-md-6 row mx-auto bg-light">
        <div class="col-lg-12 margin-tb mb-5">
            <div class="text-center">
                <h2> Pokaži članak</h2>
            </div>
            {{-- <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Nazad</a>
            </div> --}}
        </div>
    </div>
    <div class="col-md-6 row mx-auto bg-light">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-center">
                <img width="80%" class="w-48 mr-6 mb-6"
                    src="{{$post->image ? asset('storage/' . $post->image) : asset('/images/no-image.png')}}" alt="" />
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-center p-3">
                <h1>{{ $post->name }}</h1>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 pb-3">
            <div class="form-group text-justify">
                {{-- <strong>Tekst:</strong> --}}
                {{ $post->detail }}
            </div>
        </div>

        <div class="pull-right m-3">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Natrag</a>
        </div>
    </div>
@endsection
