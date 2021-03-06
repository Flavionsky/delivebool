@section('title')
Delivebool - Accedi al tuo account
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="bg">
            <div class="headercalc">
                <div class="nav">
                    <div class="logo">
                        <a href="{{ route('welcomepage') }}"><img src="./img/delivebool-logo-white.png" alt="delivebool logo"></a>
                    </div>
                    <div class="buttons">

                        @if(!Auth::check())
                        <div class="registrati-o-accedi">
                            <span><a href="{{ route('register') }}">Crea un nuovo account</span></a>
                        </div>
                        <div class="registrati-o-accedi">
                            <span><a href="{{ route('home') }}">Accedi</span></a>
                            @else
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            @endif
                        </div>
                        <div class="collabora-con-noi" id="prova" onclick="dropDown1()">
                            <i class="fas fa-chevron-down"></i>
                            <span>Collabora con noi</span>
                            <div id="drop-down-1" class="active">
                                <ul>
                                    <li><a href="{{ route('register') }}"></a><i class="fas fa-utensils"></i> Ristoranti</li>
                                    <li><i class="fas fa-briefcase"></i> Lavora con noi</li>
                                    <li><i class="far fa-building"></i> Delivebool per le Aziende</li>
                                </ul>
                            </div>
                        </div>
                        <div class="registrati-o-accedi">
                            <i class="fas fa-shopping-cart"></i>
                           <span> <a href="{{ route('cart') }}">Vai al carrello</span></a>
                        </div>
                        @if(Auth::check())
                        <div class="menu">
                            <i class="fas fa-bars"></i>
                            <span>Menu</span>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="container dashboard">
                    <h1>NOME RISTORANTE</h1>



                    <h2>$restaurant->city</h2>
                    <div class="dashboard-box">
                        <ul>
                            <li>
                                <a href="{{ route('foods.create')}}">
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


                        </tbody>
                    </table>
                </div>

        <footer>

            <div class="container">
                <div class="box-container">
                    <div class="box-footer">
                        <h5> Scopri Delivebool</h5>
                        <ul>
                            <li>
                                <a href="#">Chi siamo</a>
                            </li>
                            <li>
                                <a href="#">Pressroom</a>
                            </li>
                            <li>
                                <a href="#">Il nostro blog</a>
                            </li>
                            <li>
                                <a href="#">Programmazione</a>
                            </li>
                            <li>
                                <a href="#">Design</a>
                            </li>
                            <li>
                                <a href="#">Lavora con noi</a>
                            </li>
                            <li>
                                <a href="#">Diventa nostro partner</a>
                            </li>
                        </ul>
                    </div>

                    <div class="box-footer">
                        <h5> Note legali</h5>
                        <ul>
                            <li>
                                <a href="#">Termini e condizioni</a>
                            </li>
                            <li>
                                <a href="#">Informativa sulla privacy</a>
                            </li>
                            <li>
                                <a href="#">Cookies</a>
                            </li>
                        </ul>
                    </div>

                    <div class="box-footer">
                        <h5>Aiuto</h5>
                        <ul>
                            <li>
                                <a href="#">Contatti</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Tipi di cucina</a>
                            </li>
                            <li>
                                <a href="#">Mappa del sito</a>
                            </li>
                        </ul>
                    </div>

                    <div class="box-footer">
                        <h5>Porta Delivebool con te</h5>
                        <div class="app-store">
                            <a href="https://apps.apple.com/it/app/deliveroo-piatti-a-domicilio/id1001501844"><i id="icon-apple" class="fab fa-apple"></i> App store</a>

                        </div>
                        <div class="google-store">
                            <a href="https://play.google.com/store/apps/details?id=com.deliveroo.orderapp&hl=it&gl=US"><i id="icon-google" class="fab fa-google-play"></i> Google Play</a>

                        </div>

                    </div>

                </div>

                <div class="nav-social">
                    <div class="social-box">
                        <span>
                            <a href="https://it-it.facebook.com/Deliveroo/">
                                <i id="icon-fb" class="fab fa-facebook"></i>
                            </a>
                        </span>
                        <span>
                            <a href="https://twitter.com/deliveroo_italy?lang=it">
                                <i id="icon-tw" class="fab fa-twitter"></i>
                            </a>
                        </span>
                        <span>
                            <a href="https://www.instagram.com/deliveroo/?hl=it">
                                <i id="icon-ig" class="fab fa-instagram"></i>
                            </a>
                        </span>
                    </div>
                    <div class="copyright">
                        <span>&copy; 2021 Delivebool</span>

                    </div>
                </div>
            </div>

        </footer>

        <script>
            function dropDown1() {
                var element = document.getElementById("drop-down-1");
                element.classList.toggle("active");
            }
        </script>

    </body>
</html>
