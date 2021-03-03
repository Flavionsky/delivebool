@extends('layouts.app')

@section('content')

<table class="table">
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
    <tbody>

        @foreach ($restaurants as $restaurant)              
        <tr>
            <td>{{ $restaurant->name }}</td>
            <td>{{ $restaurant->email }}</td>
            <td>{{ $restaurant->address }}</td>
            <td>{{ $restaurant->city }}</td>
            
            @auth
            @if($restaurant->restaurant_id == $userLogged->id)
            <td>
                <form action="{{route('restaurants.edit', $restaurant)}}">
                    <input class="btn btn-success"   type="submit" value="Modifica" />
                </form>
            </td>
            <td>
                <form action="{{route('restaurants.destroy', $restaurant)}}" method="post">
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Elimina"/>
                </form>
            </td>
            @endif
            @endauth
        </tr>
        @endforeach
    </tbody>
</table>
@endsection