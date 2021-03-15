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
                @endif

            @endforeach

        </tbody>
    </table>

@endsection
