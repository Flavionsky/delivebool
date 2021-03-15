@extends('layouts.app')

@section('content')

    <table class="table">
        <thead class="thead-light">
            <tr>
                <h2>Dati Cliente</h2>
                <th scope="col">Email</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Città</th>
                <th scope="col">Indirizzo</th>
                <th scope="col">Cellulare</th>
                <th scope="col">Orario consegna</th>
                <th scope="col">Totale ordine</th>
                <th scope="col">Stato Pagamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                @if ($restaurant->id == $order->restaurant_id)
                <tr>           
                    
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->surname }}</td>
                    <td>{{ $order->city }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->mobile_phone }}</td>
                    <td>{{ $order->delivery_time }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td>{{ $order->payment->status }}</td>
                    
                </tr>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <h2>Dati Cibi</h2>
                            <th scope="col">Nome</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Quantità</th>
                        </tr>
                    </thead>
                    @foreach ($order->foods as $food)
                    <tr>
                        <td>{{$food->name}}</td>
                        <td>{{$food->price}}</td>
                        <td>{{$food->description}}</td>
                        <td>{{$food->pivot->quantity}}</td>
                    </tr>
                    @endforeach
                </table>
                @endif

            @endforeach

        </tbody>
    </table>

@endsection
