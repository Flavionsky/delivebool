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
            @if(Route::is('welcomepage'))
            <div class="header main">
            @else
            <div class="header0height">
            @endif
                <div class="nav">
                    <div class="logo">
                        <a href="{{ route('welcomepage') }}"><img src="/img/delivebool-logo-white.png" alt="delivebool logo"></a>
                    </div>
                    <div class="buttons">
                        <div class="registrati-o-accedi">
                            @if(Auth::check())
                            <span><a href="{{ route('home') }}">La tua dashboard</span></a>
                            @else
                            <i class="fas fa-shopping-cart"></i>
                            <span><a href="{{ route('ordina') }}">Ordina</span></a>
                            @endif
                        </div>
                        @if(!Auth::check())
                        <div class="registrati-o-accedi">
                            <span><a href="{{ route('register') }}">Crea un nuovo account</span></a>
                        </div>
                        @endif
                        <div class="registrati-o-accedi">
                            @if(!Auth::check())
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
                        @guest
                        <div class="collabora-con-noi" id="prova" onclick="dropDown1()">
                            <i class="fas fa-chevron-down"></i>
                            <span class="unselectable">Collabora con noi</span>
                            <div id="drop-down-1" class="active unselectable">
                                <ul class="unselectable">
                                    <li class="unselectable"><a href="{{ route('register') }}"></a><i class="fas fa-utensils"></i> Ristoranti</li>
                                    <li class="unselectable"><i class="fas fa-briefcase"></i> Lavora con noi</li>
                                    <li class="unselectable"><i class="far fa-building"></i> Delivebool per le Aziende</li>
                                </ul>
                            </div>
                        </div>
                        @endguest
                        @if(Auth::check())
                        <div class="menu unselectable" onclick="dropDown2()">
                            <i class="fas fa-bars unselectable"></i>
                            <span class="unselectable">Menu</span>
                            <div id="drop-down-2" class="active">
                                <ul class="unselectable">
                                    <li><a href=""></a><i class="fas fa-utensils"></i>Modifica Ristorante</li>
                                </ul>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @if(Route::is('welcomepage'))
                <div class="box-indirizzo">
                    <div class="card">
                        <h1>I piatti che ami, a domicilio.</h1>
                        <div class="text-box">
                            <p>Inserisci il tuo indirizzo per trovare ristoranti nei dintorni</p>
                            <input class="search-bar" type="text" placeholder="Inserisci il tuo indirizzo completo">
                            <button>Cerca</button>
                            <p><a href="#">Accedi&nbsp;</a>per visualizzare i tuoi indirizzi recenti.</p>
                        </div>
                    </div>
                    <div class="campagna-box">
                        <img class="campagna" src="./img/campaign.svg" alt="campagna">
                        <p>#aCasaTuaConDelivebool</p>
                    </div>
                </div>
                @endif
            </div>
        </div>




        @yield('content')

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
            function dropDown2() {
                var element = document.getElementById("drop-down-2");
                element.classList.toggle("active");
            }
        </script>

    </body>
</html>
