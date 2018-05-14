@extends('layouts/front')

@section('body')
    {{ $titel }}

    <ul>
    @foreach($categories as $category)
        <li><a href="{{url('article/index/' . $category->id)}}">{{ $category->id }} - {{ $category->name }}</a></li>
    @endforeach
    </ul>

@endsection