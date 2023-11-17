@extends('layouts/app')

@section('content')

<ul>
    @foreach ($movies as $movie) 
    <a class ="border" href="/movies/{{$movie->id}}"> 
    <img src="{{$movie->image}}" alt=""> 
        <h1>
            {{$movie->title}}
            
        </h1>
        En savoir plus</a>
        <br>
        
    @endforeach
    </ul>
    
@endsection