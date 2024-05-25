<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Livres</h2>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Ajouter un livre</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
