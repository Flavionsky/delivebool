@extends('layouts.layout')

@section('title')
Deliveboo Dashboard - Lista piatti
@endsection

@section('content')



        <div class="container dashboard">
            <h1>Lista piatti di {{ $restaurant->name }}</h1>
            <h2>In questa pagina puoi visualizzare una lista dei tuoi piatti.<br>Per modificare i dettagli di un piatto, clicca sul pulsante "Modifica" accanto al relativo piatto. Se vuoi eliminarlo dalla lista dei tuoi piatti, clicca su "Elimina".<br>Se invece vuoi aggiungere un nuovo piatto, premi il pulsante "Crea un nuovo piatto".</h2>
            <div class="dashboard-box">
                <ul>
                    <li>
                        <a href="{{ route('restaurants.create')}}">
                            <div class="reg-button create">
                                <h1>Crea un nuovo piatto</h1>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Piatto</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Tipo di cibo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Visibile</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($restaurant->foods as $food)
                    <tr>
                        <th scope="row">{{ $food->id }}</th>
                        <td><p><strong>{{ $food->name }}</strong></p></td>
                        <td><img src="{{ asset($food->image) }}" alt="cibo"></td>
                        <td><p>{{ $food->price }}</strong></p></td>
                        <td><p>{{ $food->kind_of_food }}</p></td>
                        <td><p>{{ $food->description }}</p></td>
                        <td><p>{{ $food->visibility }}</p></td>
                        <td>
                            <a href="{{ route('foods.edit', $food) }}"><button type="submit">Modifica</button></a>
                        </td>
                        <td>
                            <form action="{{route('foods.destroy', $food)}}" method="POST">
                                 @CSRF
                                 @method('DELETE')
                                 <button type="submit">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



        @endsection
        <!-- COPIARE FINO A QUI -->
    </body>
</html>
