@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter un produit</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom du produit</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom du produit" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
