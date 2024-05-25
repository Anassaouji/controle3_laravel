<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container m-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <a class="btn btn-success" href="{{ route('employe.create') }}" >create</a>
        @foreach ($employes as $employe )
            <li>{{ $employe->nom }}</li>
        @endforeach
    </div>
</body>
</html>



