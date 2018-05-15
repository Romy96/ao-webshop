@extends('layouts/front')

@section('body')
    <h1>{{ $titel }}</h1>

    <ul>
    @foreach($articles as $article)
        <li><a href="{{url('article/view/' . $article->id)}}">{{ $article->name }}</a></li>
    @endforeach
	</ul>
    

@endsection