@extends ('layouts.layout')

@section('title')
Delivebool - Dashboard
@endsection

@section('content')
<div class="container dashboard">
    <h1>Bentornato, $restaurant->name</h1>
    <h2>Questa è la tua dashboard. <br>Cliccando su "Lista piatti" avrai la possibilità di visualizzare i tuoi piatti, inserirne di nuovi, modificare quelli presenti o cancellarli. <br>Cliccando su "Lista ordini", invece, potrai vedere quanti ordini hai ricevuto e visualizzarne delle statistiche complete.<br>Puoi anche cambiare i tuoi dati cliccando su "Modifica i tuoi dati".</h2>
    <div class="dashboard-box">
        <ul>
            <li>
                <a href="FOODS_INDEX">
                    <div class="reg-button">
                        <h1>Lista piatti</h1>
                    </div>
                </a>
            </li>
            <li>
                <a href="ORDERS_INDEX">
                    <div class="reg-button">
                        <h1>Lista ordini</h1>
                    </div>
                </a>
            </li>
            <li>
                <a href="RESTAURANT_EDIT">
                    <div class="reg-button">
                        <h1>Modifica i tuoi dati</h1>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection
