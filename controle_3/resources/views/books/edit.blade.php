<!-- resources/views/books/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier le Livre</h2>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ $book->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
