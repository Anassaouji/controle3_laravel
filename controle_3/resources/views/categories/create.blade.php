@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter une catégorie</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom de la catégorie</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom de la catégorie" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
