@extends('layouts.app')

@section('content')
    <h1>Modifier le formateur</h1>
    <form action="{{ route('formateurs.update', $formateur->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="{{ $formateur->name }}" required>
        <button class="btn btn-success" type="submit">Enregistrer</button>
    </form>
@endsection
