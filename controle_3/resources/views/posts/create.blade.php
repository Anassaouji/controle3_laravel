<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('livres.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="titre" >
        <input type="number" name="pages" >
        <input type="text" name="description" >
        <input type="file" name="image" >
        <select name="categorie_id">
        @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{$categorie->nom }}</option>
        @endforeach 
        </select>
        <button>Ajouter</button>
    </form>
</body>
</html>