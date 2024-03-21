@extends('layouts.app')

@section('content')

<h1> Albums </h1>
<div class="row">
    @foreach ($albums as $album)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="/storage/album_covers/{{$album->cover_image}}" height="200px" class="card-img-top" alt="Album Image">
                <div class="card-body">
                    <h5 class="card-title">{{$album->name}}</h5>
                    <p class="card-text">{{$album->description}}</p>
                    <a href="{{route('albums.show' , $album->id)}}" class="btn btn-primary">Lihat</a>
                    <form method="POST" action="{{ route('albums.destroy', $album->id) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
