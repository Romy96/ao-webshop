@extends('layouts/front')

@section('body')
    {{ $titel }}

    <ul>
    @foreach($articles as $article)
        <li>{{ $article->name }}</li>
    @endforeach
    </ul>

@endsection