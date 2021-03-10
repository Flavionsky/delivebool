@section('title')
Delivebool - PAGINA DEL RISTORANTE (cambiare in modo dinamico)
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body>

        <div class="bg">
            <div class="header-cart">
                <div class="nav">
                    <div class="logo">
                        <a href="{{ route('welcomepage') }}"><img src="../img/delivebool-logo-white.png" alt="delivebool logo"></a>
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
                        @if(Auth::check())
                        <div class="menu">
                            <i class="fas fa-bars"></i>
                            <span>Menu</span>
                        </div>
                        @endif
                    </div>
                </div>

            <div class="rest-dashboard">
                @foreach ($restaurants as $restaurant)
                <div class="rest-dashboard-header">
                    <div class="left-rest">
                        <h1>{{$restaurant->name}}</h1>
                        <h2>tipologie ristorante</h2>
                        <h3>restaurant->address</h3>
                        <h3>restaurant->city</h3>
                    </div>
                    <div class="right-rest">
                        <img src="restaurant->image" alt="immagine ristorante">
                        <h3>restaurant->email</h3>
                        <h3>restaurant->p_iva</h3>

                    </div>
                </div>
                @endforeach
                <hr>
                <div class="rest-dashboard-main">
                    <h2>Piatti del ristorante</h2>

                    <div id="app">
                      <div id="product">
                        <item v-for="item in items" v-bind:item_data="item"></item>
                      </div>
                      <div id="cart">
                        <div id="head">
                          <span id="quantity">Quantità</span>
                          <span id="total">Prezzo</span>
                        </div>
                        <buyitem v-for="buyitem in buyitems" v-bind:buy_data="buyitem"></buyitem>
                        <h5 v-if="total()">Totale carrello: € @{{total()}}</h5>
                        <h5 v-if="total()"><a href="{{ route('checkout') }}">Vai al checkout</a></h5>
                      </div>
                    </div>


                <template id="product-box">
                  <div class="box">
                    <img :src="item_data.img"/>
                    <i class="fa fa-plus" v-on:click="addItem(item_data)"></i>
                    <h3>@{{item_data.title}}</h3>
                    <p>€ @{{item_data.price}}</p>
                  </div>
                </template>

                <template id="buy-box">
                  <div class="row">
                    <h4>@{{buy_data.title}}</h4>

                    <div class="qty-minus" v-on:click="minusQty(buy_data)">-</div>
                    <div class="qty">@{{buy_data.qty}}</div>
                    <div class="qty-plus" v-on:click="plusQty(buy_data)">+</div>
                    <div class="del" v-on:click="removeItem(buy_data)">Rimuovi</div>
                    <div class="totalprice">@{{buy_data.total}}</div>
                  </div>
                </template>
                </div>
            </div>
        </div>
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

        <script src="{{ asset('js/script.js') }}" charset="utf-8"></script>

        <script>
            function dropDown1() {
                var element = document.getElementById("drop-down-1");
                element.classList.toggle("active");
            }
        </script>


    </body>
</html>
