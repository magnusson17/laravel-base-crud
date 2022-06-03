@extends('layout.layout')

@section('content')
    @if ('message')
        <div>
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('comics.create') }}" class="btn btn-success">New</a>

    <div class="container">
        <div class="row row-cols-4 g-3 justify-content-center">
            @foreach ($comics as $comic)
                <div>
                    <div class="card h_90vh" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="img">
                        <div class="card-body overflow-auto">

                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>

                            <div class="container">
                                <div class="row">
                                    <div class="col d-flex flex-column">
                                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mb-2">Entra</a>
                                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning mb-2">Modifica</a>
                                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form mb-2"
                                            data-name="{{ $comic->title }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger w-100">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('delete-message')
    <script src="{{ asset('js/deleteMessage.js') }}"></script>
@endsection
