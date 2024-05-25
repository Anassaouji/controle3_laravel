<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body class="container">
    <a class="btn btn-success" href="{{ route('livres.create') }}">Create</a>
    @if (count($livres) == 0)
    <p>aucun livre</p>
    @else
    
    <table class="table table-striped table-bordered table-primary border-5">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Pages</th>
            <th>Description</th>
            <th>Image</th>
            <th>Categorie id</th>
            <th>Action</th>
        </tr>
        @foreach ($livres as $livre)
        <tr>
            <td>{{ $livre->id }}</td>
            <td>{{ $livre->titre }}</td>
            <td>{{ $livre->pages }}</td>
            <td>{{ $livre->description }}</td>
            <td><img src="{{ asset('storage/'.$livre->image)}}"></td>
            <td>{{ $livre->categorie_id }}</td>
            <td>
                <a class="btn btn-secondary" href="{{ route('livres.edit',$livre) }}">update</a>
                <a class="btn btn-info" href="{{ route('livres.show',$livre) }}">show</a>
                <form action="{{ route('livres.destroy',$livre) }}" method="post" onsubmit="return confirm('are you sure?');">
                    @method("delete")
                    @csrf
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endif
    {{ $livres->links()}}

</body>
</html>