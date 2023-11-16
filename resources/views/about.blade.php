@extends('layouts/app')


@section('content')

<h1>A propos de {{$title}} </h1>

<ul>
@foreach ($team as $member) 
    <li>
        <a href="/a-propos/{{ $member['name'] }} ">
        <img src="{{$member['image']}}" alt=""> 
        {{$member['name']}}
        ({{$member['job']}})
    </li>
        </a>
    
@endforeach
</ul>
@endsection