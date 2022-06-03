@extends('layout.layout')

@section('content')

@if ('message')
<div>
    {{ session('message') }}
</div>
@endif

<a href="{{ route('comics.create') }}">Nuovo</a>

@foreach ($comics as $comic)

<h2>{{ $comic->title }}</h2>
<a href="{{ route('comics.show', $comic->id) }}">Entra</a>
<a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
<form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Elimina</button>
</form>

@endforeach

    
@endsection