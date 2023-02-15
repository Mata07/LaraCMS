@extends('layouts.solar')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Objave</h2>
            </div>
            <div class="pull-right mb-3 mt-3">
                @can('post-create')
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Napravi novu objavu</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success col-md-6 mx-auto">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr class="table-success">
            <th>Br</th>
            <th>Naslov</th>
            <th>Autor</th>
            <th>Text</th>
            <th>Slika</th>
            <th>Objavljeno</th>
            {{-- <th>Objavi</th> --}}
            <th width="280px">Akcija</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->author }}</td>
            <td>{{ $post->detail }}</td>
            <td><img width="100px" src ="{{ asset('storage/' . $post->image) }}" /></td>
            {{-- <td>{{ $post->is_published }}</td> --}}
            <td>
                @if($post->is_published == '1')
                    DA
                @else 
                    NE
                @endif
            </td>
            {{-- <td>
                <form action="{{ route('publish',$post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-danger">Objavi</button>
                </form>
            </td> --}}
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Pokaži</a>
                    @can('post-edit')
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Uredi</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('post-delete')
                    <button type="submit" class="btn btn-danger">Obriši</button>
                    @endcan
                    @can('post-publish')
                    <a class="btn btn-primary" href="{{ route('publish',$post->id) }}">Objavi</a>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $posts->links() !!}

@endsection