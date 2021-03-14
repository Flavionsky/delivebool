@extends('layouts.layout')

@section('title')
    Delivebool Dashboard
@endsection

@section('content')

    <div class="container dashboard">
        <h1>Dashboard di {{ $restaurant->name }}</h1>
        <ul class="dashboard types">
            <li><img src="{{ asset($restaurant->image) }}" alt="ristorante"></li>
            <li><strong>Nome ristorante: </strong>{{ $restaurant->name }}</li>
            <li><strong>Indirizzo e-mail: </strong>{{ $restaurant->email }}</li>
            <li><strong>Indirizzo: </strong>{{ $restaurant->address }}</li>
            <li><strong>Città: </strong>{{ $restaurant->city }}</li>
            <li><strong>Partita IVA: </strong>{{ $restaurant->p_iva }}</li>
        </ul>
        <br>

        <div class="dashboard-box">
            <ul>
                <li>
                    <a href="{{ route('foods.create') }}">
                        <div class="reg-button create">
                            <h1>Aggiungi piatto</h1>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('restaurants.edit', $restaurant) }}">
                        <div class="reg-button create">
                            <h1>Modifica profilo</h1>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="reg-button create">
                            <h1>Lista ordini</h1>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        @if (!$restaurant->foods->isEmpty())

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Tipo di cibo</th>
                    <th scope="col">Visibile</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($restaurant->foods as $food)
                    @if($food->deleted == 0)
                    <tr>
                        <td>
                            <p><strong>{{ $food->name }}</strong></p>
                        </td>
                        <td><img src="{{ asset($food->image) }}" alt="cibo"></td>
                        <td>
                            <p>€ {{ $food->price }}</strong></p>
                        </td>
                        <td>
                            <p>{{ $food->kind_of_food }}</p>
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
                    @endif
                @endforeach
            </tbody>
        </table>
        @endif
    </div>



@endsection
</body>

</html>
