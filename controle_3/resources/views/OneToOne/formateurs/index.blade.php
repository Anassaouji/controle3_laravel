@extends('layouts.app')
@section('content')

<a class="btn btn-success" href="{{ route('formateurs.create') }}">Create</a>
    @if (count($formateurs) == 0)
    <p>aucun formateur</p>
    @else

    <table class="table table-striped table-bordered table-primary border-5">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Action</th>
        </tr>
        @foreach ($formateurs as $formateur)
        <tr>
            <td>{{ $formateur->id }}</td>
            <td>{{ $formateur->name }}</td>
            <td>
                <a class="btn btn-secondary" href="{{ route('formateurs.edit',$formateur) }}">update</a>
                <a class="btn btn-info" href="{{ route('formateurs.show',$formateur) }}">show</a>
                <form action="{{ route('formateurs.destroy',$formateur) }}" method="post" onsubmit="return confirm('are you sure?');">
                    @method("delete")
                    @csrf
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endif
    {{ $formateurs->links()}}



@endsection
