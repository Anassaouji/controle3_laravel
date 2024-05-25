<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Ajouter un technicien</h1>
        <form action="{{ route('tech.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom de technicien</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name " required>
                <input type="email" class="form-control" id="email" name="email" placeholder="email " required>
                <input type="number" class="form-control" id="salaire" name="salaire" placeholder="salaire " required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
        @if (session('message'))
            <div class="alert alert-success">
            {{ session('message') }}
        </div>
@endif
    </div>
</body>
</html>