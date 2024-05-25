@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau stagiaire</h1>
    <form action="{{ route('stagiaires.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom :</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Âge :</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="filiere" class="form-label">Filière :</label>
            <input type="text" name="filiere" id="filiere" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="formateur_id" class="form-label">Formateur :</label>
            <select name="formateur_id" id="formateur_id" class="form-select" required>
                @foreach($formateurs as $formateur)
                    <option value="{{ $formateur->id }}">{{ $formateur->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
