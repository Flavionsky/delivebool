@extends ('layouts.layout')

@section('title')
Delivebool - Orders
@endsection

@section('content')

<div class="container dashboard">
    <h1>Lista ordini di $restaurant->name</h1>
    <h2>In questa pagina puoi visualizzare una lista dei tuoi ordini ricevuti.<br>Per controllare i dettagli relativi ad ogni ordine, clicca sul pulsante "Statistiche".

    <table class="table">

            <tr>
                <td><p><strong>ID ordine: </strong> $order->id </p></td>
                <td><p><strong> $order->name $order->surname </strong></p></td>
                <td><p><strong> $order->address </strong></p></td>
                <td><p><strong> $order->city </strong></p></td>
                <td><p><strong> $order->mobile_phone </strong></p></td>
                <td><p><strong> $order->delivery_time </strong></p></td>
                <td><p><strong> $order->price </strong></p></td>
                <td>
                    <a href=" route('statistiche?', $order->id) "><button type="submit">Statistiche</button></a>
                </td>
            </tr>

    </table>
</div>

@endsection
