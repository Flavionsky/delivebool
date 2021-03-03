<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Delivebool - Dashboard</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- COPIARE SOLO DA QUI -->
        @section('content')
        <div class="container dashboard">
            <h1>Bentornato, {{ $restaurant->name }}</h1>
            <h2>Questa è la tua dashboard. <br>Cliccando su "Lista piatti" avrai la possibilità di visualizzare i tuoi piatti, inserirne di nuovi, modificare quelli presenti o cancellarli. <br>Cliccando su "Lista ordini", invece, potrai vedere quanti ordini hai ricevuto e visualizzarne delle statistiche complete.</h2>
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
                </ul>
            </div>
        </div>
        @endsection
        <!-- COPIARE FINO A QUI -->

    </body>
</html>
