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
        <h1>Ajouter un employe</h1>
        <form action="{{ route('employe.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom d'employe</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom d'employe" required>
                <input type="number" class="form-control" id="age" name="age" placeholder="age d'employe" required>
                <input type="number" class="form-control" id="salaire" name="salaire" placeholder="salaire d'employe" required>
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