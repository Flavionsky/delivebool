@extends('layouts.app')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Restaurant Name</th>
            <th scope="col">Email</th>           
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">P.Iva</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $restaurants->name }}</td>
            <td>{{ $restaurants->email }}</td>
            <td>{{ $restaurants->address }}</td>
            <td>{{ $restaurants->city }}</td>
            <td>{{ $restaurants->p_iva }}</td>
            <td>
                <a href="{{ route('restaurants.index') }}">Torna indietro</a>
            </td>
            <td><a href="{{ route('restaurants.edit', $restaurants->id) }}">Aggiorna</a></td>
        </tr>
    </tbody>
</table>

@endsection