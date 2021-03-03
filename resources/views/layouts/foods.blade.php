@extends ('layouts.layout')

@section('title')
Delivebool - Foods
@endsection

@section('content')
<div class="container dashboard">
    <h1>Lista piatti di $restaurant->name </h1>
    <h2>In questa pagina puoi visualizzare una lista dei tuoi piatti.<br>Per modificare i dettagli di un piatto, clicca sul pulsante "Modifica" accanto al relativo piatto. Se vuoi eliminarlo dalla lista dei tuoi piatti, clicca su "Elimina".<br>Se invece vuoi aggiungere un nuovo piatto, premi il pulsante "Crea un nuovo piatto".</h2>
    <div class="dashboard-box">
        <ul>
            <li>
                <a href="FOODS_CREATE">
                    <div class="reg-button create">
                        <h1>Crea un nuovo piatto</h1>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <table class="table">

            <tr>
                <td><p><strong>ID piatto: </strong> $food->id </p></td>
                <td><p><strong>$food->name </strong></p></td>
                <td>immagine </td>
                <td><p><strong> $food->price </strong></p></td>
                <td><p><strong>Tipo di cibo: </strong> $food->kind_of_food </p><br></td>
                <td><p><strong>Descrizione: </strong> $food->description </p><br></td>
                <td><p><strong>Visibile: </strong> $food->visibility </p><br></td>
                <td>
                    <a href=" route('foods.edit', $food->id) "><button type="submit">Modifica</button></a>
                </td>
                <td>
                    <form action="route('foods.destroy', $food->id)" method="POST">
                         @CSRF
                         @method('DELETE')
                         <button type="submit">Cancella</button>
                    </form>
                </td>
            </tr>

    </table>
</div>
@endsection
