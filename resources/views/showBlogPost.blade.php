
@extends('layouts.frontp')
@section('content')

            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                            <h1 class="post-title text-center p-3">{{ $post->name }}</h1>
                            <img class="p-3" width="100%" src ="{{ asset('storage/' . $post->image) }}" />
                            <p class="post-subtitle">{!! $post->detail !!}</p>
                            <p class="post-meta">
                                Autor: {{ $post->author }} &nbsp;
                                Datum objave: {{ date('d. n. Y. G:i', strtotime($post->created_at)) }} 
                            </p>
                   </div>                           
                </div>
            </div>

            @endsection
 