<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Delivebool Dashboard - Lista ordini</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- COPIARE SOLO DA QUI -->
        @extends('')

        @section('content')
        <div class="container dashboard">
            <h1>Lista ordini di {{ $restaurant->name }}</h1>
            <h2>In questa pagina puoi visualizzare una lista dei tuoi ordini ricevuti.<br>Per controllare i dettagli relativi ad ogni ordine, clicca sul pulsante "Statistiche".

            <table class="table">
                @foreach($orders as $order)
                    <tr>
                        <td><p><strong>ID ordine: </strong>{{ $order->id }}</p></td>
                        <td><p><strong>{{ $order->name $order->surname }}</strong></p></td>
                        <td><p><strong>{{ $order->address }}</strong></p></td>
                        <td><p><strong>{{ $order->city }}</strong></p></td>
                        <td><p><strong>{{ $order->mobile_phone }}</strong></p></td>
                        <td><p><strong>{{ $order->delivery_time }}</strong></p></td>
                        <td><p><strong>{{ $order->price }}</strong></p></td>
                        <td>
                            <a href="{{ route('statistiche?', $order->id) }}"><button type="submit">Statistiche</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        @endsection
        <!-- COPIARE FINO A QUI -->

    </body>
</html>
