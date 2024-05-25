@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du produit {{ $product->name }}</h1>
        <p><strong>Nom :</strong> {{ $product->name }}</p>
        <p><strong>Créé le :</strong> {{ $product->created_at->format('d/m/Y H:i') }}</p>
        <p><strong>Dernière modification :</strong> {{ $product->updated_at->format('d/m/Y H:i') }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Retour à la liste des produits</a>
    </div>
@endsection
