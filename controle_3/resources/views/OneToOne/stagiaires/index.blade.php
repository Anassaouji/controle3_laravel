@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des stagiaires</h1>
        <a href="{{ route('stagiaires.create') }}" class="btn btn-primary mb-3">Créer un nouveau stagiaire</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Âge</th>
                    <th scope="col">Filière</th>
                    <th scope="col">Formateur</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stagiaires as $stagiaire)
                <tr>
                    <th scope="row">{{ $stagiaire->id }}</th>
                    <td>{{ $stagiaire->name }}</td>
                    <td>{{ $stagiaire->age }}</td>
                    <td>{{ $stagiaire->filiere }}</td>
                    <td>{{ $stagiaire->formateur->name }}</td>
                    <td>
                        <a href="{{ route('stagiaires.show', $stagiaire->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('stagiaires.edit', $stagiaire->id) }}" class="btn btn-warning btn-sm">Éditer</a>
                        <form action="{{ route('stagiaires.destroy', $stagiaire->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce stagiaire ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
