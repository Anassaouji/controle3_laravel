@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du stagiaire</h1>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><strong>Nom :</strong> {{ $stagiaire->name }}</h5>
                <p class="card-text"><strong>Âge :</strong> {{ $stagiaire->age }}</p>
                <p class="card-text"><strong>Filière :</strong> {{ $stagiaire->filiere }}</p>
                <p class="card-text"><strong>Formateur :</strong> {{ $stagiaire->formateur->name }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('stagiaires.edit', $stagiaire->id) }}" class="btn btn-primary">Modifier</a>
                <form action="{{ route('stagiaires.destroy', $stagiaire->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce stagiaire ?')">Supprimer</button>
                </form>
                <a href="{{ route('stagiaires.index') }}" class="btn btn-secondary">Retour à la liste des stagiaires</a>
            </div>
        </div>
    </div>
@endsection
