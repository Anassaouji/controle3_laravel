@extends('layouts.app')

@section('content')
    <h1>Détails du formateur</h1>
    <p><strong>Nom :</strong> {{ $formateur->name }}</p>
    <a class="btn btn-success" href="{{ route('formateurs.edit', $formateur->id) }}">Modifier</a>
    <form action="{{ route('formateurs.destroy', $formateur->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce formateur ?')">Supprimer</button>
    </form>
    <a href="{{ route('formateurs.index') }}">Retour à la liste des formateurs</a>
@endsection
