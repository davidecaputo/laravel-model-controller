@extends('layout.app')

@section('title')
Film
@endsection

@section('content')
<div class="container">
    <h1 class="text-center">Film</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-3">
            <div class="card mb-5">
                <img src="{{$movie->image}}" alt="">
                <div class="card-body">
                    <p>{{$movie->title}}</p>
                    <p>{{$movie->nationality}}</p>
                    <p>{{$movie->date}}</p>
                    <p>{{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
