@extends('layouts.frontp')
        <!-- Page Header-->
        <div>

            @include('partials.postHeader')
        </div>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>{!! $post->detail !!}</p>
                        {{-- <a href="#!"><img class="img-fluid" src="{{ asset('storage/' . $post->image) }}">
                            <div class="container position-relative px-4 px-lg-5">" alt="..." /></a> --}}
                       
                        <p>
                            Autor
                        <a href="#!">{!! $post->author !!}</a>
                        Datum objave: {{ date('d. n. Y. G:i', strtotime($post->created_at)) }} 
                        </p>
                    </div>
                </div>
            </div>
        </article>
        
