@extends('layouts/app')

@section('content')
<div>
    <h1>Nos catégories</h1>
    <a href="/categories/creer">Créer une catégorie</a>
    @foreach ($categories as $category)
        <div>
            <h2>
                {{$category->name}}
            </h2>
        </div>
    @endforeach
</div>
    
@endsection