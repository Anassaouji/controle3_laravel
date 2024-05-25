@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau formateur</h1>
    <form class="form" action="{{ route('formateurs.store') }}" method="POST">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>
        <button class="btn btn-success" type="submit">Enregistrer</button>
    </form>
@endsection
