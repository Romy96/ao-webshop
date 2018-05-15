@extends('layouts/front')

@section('body')
    <h2>{{ $titel }}</h2>

    <ul>
    @foreach($categories as $category)
        <li><a href="{{url('article/' . $category->id)}}">{{ $category->id }} - {{ $category->name }}</a></li>
    @endforeach
    </ul>

@endsection