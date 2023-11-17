@extends('layouts/app')


@section('content')

{{-- <h1>A propos de {{$movie->title}} </h1> --}}

<ul>
@foreach ($movies as $movie) 
    <li>
        {{ $movie->title }} 
        <img src="{{$movie->image}}" alt=""> 
    </li>
        </a>
    
@endforeach
</ul>
@endsection