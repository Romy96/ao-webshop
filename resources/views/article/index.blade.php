@extends('layouts/front')

@section('body')
    <h1>{{ $titel }}</h1>

    
    @foreach($articles as $article)
        <h2>{{ $article->name }}</h2></br>
        <p><span>{{ $article->price }}</span></p></br>
        <p>{{ $article->description }}</p>
    @endforeach
    

@endsection