<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('livres.update',$livre) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="number" name="id" readonly  value="{{ $livre->id }}">
        <input type="text" name="titre"  value="{{ $livre->titre }}">
        <input type="number" name="pages"  value="{{ $livre->pages }}">
        <input type="text" name="description"  value="{{ $livre->description }}">
        <input type="file" name="image"  value="{{ $livre->image }}">
        <select name="categorie_id" value="{{ $livre->categorie_id }}">
        @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{$categorie->nom }}</option>
        @endforeach 
        </select>
        <button>Modifier</button>
    </form>
</body>
</html>