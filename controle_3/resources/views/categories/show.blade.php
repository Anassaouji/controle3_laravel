@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails de la catégorie {{ $category->name }}</h1>
        <p><strong>ID :</strong> {{ $category->id }}</p>
        <p><strong>Nom :</strong> {{ $category->name }}</p>
        <p><strong>Créée le :</strong> {{ $category->created_at->format('d/m/Y H:i') }}</p>
        <p><strong>Dernière modification :</strong> {{ $category->updated_at->format('d/m/Y H:i') }}</p>
        <div class="mt-3">
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Éditer</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">Supprimer</button>
            </form>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour à la liste des catégories</a>
        </div>
    </div>
@endsection
