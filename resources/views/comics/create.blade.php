@extends('layout.layout')

@section('content')

<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="password" id="title" name="title">

    <label for="description">Description</label>
    <input type="text" id="description" name="description">

    <label for="thumb">Thumb</label>
    <input type="text" id="thumb" name="thumb">

    <label for="price">price</label>
    <input type="text" id="price" name="price">

    <label for="series">series</label>
    <input type="text" id="series" name="series">

    <label for="sale_date">sale_date</label>
    <input type="text" id="sale_date" name="sale_date">

    <select name="type" id="type">type
        <option value="graphic_novel">Graphic novel</option>
        <option value="comic_book">Comic book</option>
    </select>

    <button type="submit">Save</button>
</form>
    
@endsection