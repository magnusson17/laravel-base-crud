@extends('layout.layout')

@section('content')

@if ($errors -> any())
<div>
    <ul>
        @foreach ($errors -> all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="title">Title</label>
    <input required type="text" id="title" name="title" value="{{ $comic->title }}">

    <label for="description">Description</label>
    <input required type="text" id="description" name="description" value="{{ $comic->description }}">

    <label for="thumb">Thumb</label>
    <input required type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}">

    <label for="price">Price</label>
    <input required type="number" id="price" name="price" min="0" value="0" step=".01" value="{{ $comic->price }}">

    <label for="series">series</label>
    <input required type="text" id="series" name="series" value="{{ $comic->series }}">

    <label for="sale_date">sale_date</label>
    <input required type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">

    <select required name="type" id="type">type
        {{-- sarebbe: <option @if($comic->type === 'graphic_novel') selected @endif>Graphic novel</option> MA grafic_novel != Graphic novel, come faccio quindi? --}}
        <option value="graphic_novel">Graphic novel</option>
        <option value="comic_book">Comic book</option>
    </select>

    <button type="submit">Save</button>
</form>
    
@endsection