@extends('layouts.frontp')
@section('content')
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    @foreach ($posts as $post)
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href={{ route('showBlogPost',$post->id) }}>
                            <h2 class="post-title text-center pb-1">{{ $post->name }}</h2>
                            <p class="post-meta text-center">Autor: {{ $post->author }}</p>
                            <img class="p-3" width="100%" src ="{{ asset('storage/' . $post->image) }}" />
                            <p class="post-subtitle">{!! $post->detail !!}</p>
                        </a>
                        <p class="post-meta">
                            Autor: {{ $post->author }} &nbsp;
                            Datum objave: {{ date('d. n. Y. G:i', strtotime($post->created_at)) }} 
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    @endforeach

                </div>
            </div>
        @endsection