{{-- @section('postHeader')
<!-- Page Header-->
<header class="masthead" style="background-image: {{ asset('storage/' . $post->image) }}">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{ $post->name }}</h1>
                    
                    <span class="meta">
                        Autor
                        <a href="#!">{!! $post->author !!}</a>
                        Datum objave: {{ date('d. n. Y. G:i', strtotime($post->created_at)) }} 
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection --}}