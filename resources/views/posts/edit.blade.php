@extends('layouts.solar')
@section('content')

<div class="col-md-6 mx-auto row">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Uredi objavu</h2>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger col-md-6 mx-auto">
        <strong>Opa!</strong> Dogodila se greška!<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
     <div class="col-md-6 row mx-auto">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="col-form-label mt-1" for="name">Naslov: </label>
                <input type="text" name="name" class="form-control" placeholder="Naslov" value="{{ $post->name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="col-form-label mt-1" for="detail">Tekst: </label>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Tekst" value="{{ $post->detail }}">{{ $post->detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <div class="form-group">
                <label class="col-form-label mt-3" for="image">Trenutna slika: </label>
                <img height="100px" class="w-48 m-5"
                    src="{{$post->image ? asset('storage/' . $post->image) : asset('/images/no-image.png')}}" alt="" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3 mb-5 ">
            <div class="form-group">
                <label class="col-form-label mt-3" for="image">Promjeni sliku: </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full mx-4 px-4" name="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3 mb-3">
            <div class="form-group ">
                <label class="form-check-label" for="is_published">Objavi: &nbsp;&nbsp;&nbsp;</label>
                <input class="form-check-input" type="radio" name="is_published" value="1" {{ ($post->is_published=="1")? "checked" : "" }}> <span class="m-3">Da </span>
                <input class="form-check-input" type="radio" name="is_published" value="0" {{ ($post->is_published=="0")? "checked" : "" }}> <span class="m-3">Ne </span>
            </div> 
        </div>           
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Pošalji</button>
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Natrag</a>
        </div>
    </div>
</form>
    
@endsection