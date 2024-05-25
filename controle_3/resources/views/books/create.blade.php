<!-- resources/views/books/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un Livre</h2>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="user_id">User_id</label>
                <select class="form-control" id="user_id" name="user_id" rows="5" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{$user->name}}</option>
                    @endforeach
                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
