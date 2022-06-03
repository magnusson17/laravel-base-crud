@extends('layout.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h2>{{ $comic->title }}</h2>
            <p>{{ $comic->description }}</p>
            <span>{{ $comic->price }}$</span>
            <p>{{ $comic->series }}</p>
        </div>
    </div>
</div>

    
@endsection