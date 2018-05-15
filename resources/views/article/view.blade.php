@extends('layouts/front')

@section('body')
	@foreach($article_details as $article)
	<h3>{{ $article->name }}</h3></br>

    <p><span>{{ $article->price }}</span></p></br>
    <p>{{ $article->description }}</p>
	@endforeach
@endsection