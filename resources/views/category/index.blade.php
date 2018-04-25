@extends('layouts/front')

@section('body')
    {{ $titel }}

    <ul>
    @foreach($categories as $category)
        <li>{{ $category->id }} - {{ $category->name }}</li>
    @endforeach
    </ul>

@endsection