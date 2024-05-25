<!-- resources/views/books/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails du Livre</h2>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->description }}</p>
                <a href="{{ route('books.index') }}" class="btn btn-primary">Retour</a>
            </div>
        </div>
    </div>
@endsection
