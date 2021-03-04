@extends ('layouts.layout')

@section('title')
Delivebool - Dashboard
@endsection

@section('content')

<!-- DA TOGLIERE POI -->

<div class="bg">
    <div class="header dashboard">
        <div class="nav">
            <div class="logo">
                <img src="./img/vectorpaint.svg" alt="deliveroo logo">
            </div>
            <div class="buttons">
                <div class="collabora-con-noi" id="prova" onclick="dropDown1()">
                    <i class="fas fa-chevron-down"></i>
                    <span>Collabora con noi</span>
                    <div id="drop-down-1" class="active">
                        <ul>
                            <li><i class="fas fa-utensils"></i> Ristoranti</li>
                            <li><i class="fas fa-briefcase"></i> Lavora con noi</li>
                            <li><i class="far fa-building"></i> Deliveroo per le Aziende</li>
                        </ul>
                    </div>
                </div>
                <div class="registrati-o-accedi">
                    <i class="fas fa-home"></i>
                    <span>Registrati o accedi</span>
                </div>
                <div class="menu">
                    <i class="fas fa-bars"></i>
                    <span>Menu</span>
                </div>
            </div>
        </div>
    </div>

<!-- DA TOGLIERE FIN QUI -->




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
