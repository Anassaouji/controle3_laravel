@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier le stagiaire</h1>
        <form action="{{ route('stagiaires.update', $stagiaire->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nom :</label>
                <input type="text" name="name" id="name" value="{{ $stagiaire->name }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Âge :</label>
                <input type="number" name="age" id="age" value="{{ $stagiaire->age }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="filiere" class="form-label">Filière :</label>
                <input type="text" name="filiere" id="filiere" value="{{ $stagiaire->filiere }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="formateur_id" class="form-label">Formateur :</label>
                <select name="formateur_id" id="formateur_id" class="form-select" required>
                    @foreach($formateurs as $formateur)
                        <option value="{{ $formateur->id }}" {{ $stagiaire->formateur_id == $formateur->id ? 'selected' : '' }}>{{ $formateur->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
