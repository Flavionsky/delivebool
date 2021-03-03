@extends('layouts.app')

@section('content')

<table>
    <thead>
        <tr>
            <th scope="col">Restaurant Name</th>
            <th scope="col">Email</th>           
            <th scope="col">Address</th>
            <th scope="col">City</th>
            @auth
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
            @endauth
        </tr>
    </thead>
</table>