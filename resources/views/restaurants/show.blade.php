@extends('layouts.layout')

@section('title')
    Deliveboo Dashboard - Lista piatti
@endsection

@section('content')



    <div class="container dashboard">
        <h1>Lista piatti di {{ $restaurant->name }}</h1>
        <h2>Le tue Tipologie: </h2>
        <ul class="dashboard types">
            @foreach ($restaurant->types as $type)
                <li>
                    <h3>{{ $type->name }}<h3>
                </li>
            @endforeach
        </ul>
        <h2>In questa pagina puoi visualizzare una lista dei tuoi piatti e modificare le tue informazioni.<br>Per modificare i dettagli di un piatto, clicca
            sul pulsante "Modifica" accanto al relativo piatto. Se vuoi eliminarlo dalla lista dei tuoi piatti, clicca su
            "Elimina".<br>Se invece vuoi aggiungere un nuovo piatto, premi il pulsante "Crea un nuovo piatto".<br>Per cambiare le tue informazioni, premi "Modifica profilo".</h2>
        <div class="dashboard-box">
            <ul>
                <li>
                    <a href="{{ route('foods.create') }}">
                        <div class="reg-button create">
                            <h1>Crea un nuovo piatto</h1>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="reg-button create">
                            <h1>Modifica profilo</h1>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        @if (!$restaurant->foods->isEmpty())
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

                @foreach ($restaurant->foods as $food)
                    <tr>
                        <th scope="row">{{ $food->id }}</th>
                        <td>
                            <p><strong>{{ $food->name }}</strong></p>
                        </td>
                        <td><img src="{{ asset($food->image) }}" alt="cibo"></td>
                        <td>
                            <p>{{ $food->price }}</strong></p>
                        </td>
                        <td>
                            <p>{{ $food->kind_of_food }}</p>
                        </td>
                        <td>
                            <p>{{ $food->description }}</p>
                        </td>
                        @if ($food->visibility == 1)
                            <td>
                                <p>{{ $food->visibility = 'Sì' }}</p>
                            </td>
                        @else
                            <td>
                                <p>{{ $food->visibility = 'No' }}</p>
                            </td>
                        @endif
                        <td>
                            <a href="{{ route('foods.edit', $food) }}"><button type="submit">Modifica</button></a>
                        </td>
                        <td>
                            <form action="{{ route('foods.destroy', $food) }}" method="POST">
                                @CSRF
                                @method('DELETE')
                                <button type="submit">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>



@endsection
</body>

</html>
