<<<<<<< HEAD
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
=======
{{-- @extends('layouts.layout')

@section('content') --}}



        {{-- <div class="container dashboard">
            <h1>Lista piatti di {{ $restaurant->name }}</h1>
            <h2>Le tue Tipologie: </h2>
            <ul class="dashboard types">
                @foreach ($restaurant->types as $type)
                <li><h3>{{$type->name}}<h3></li>
                @endforeach
            </ul>
            <h2>In questa pagina puoi visualizzare una lista dei tuoi piatti.<br>Per modificare i dettagli di un piatto, clicca sul pulsante "Modifica" accanto al relativo piatto. Se vuoi eliminarlo dalla lista dei tuoi piatti, clicca su "Elimina".<br>Se invece vuoi aggiungere un nuovo piatto, premi il pulsante "Crea un nuovo piatto".</h2>
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
>>>>>>> Luca

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

                <div class="rest-dashboard-header">
                    <div class="left-rest">
                        <h1>$restaurant->name</h1>
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
                        <h5 v-if="total()"><a href="{{ route('cart') }}">Vai al checkout</a></h5>
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
                    <div class="qty" v-if="buy_data.qty === 0 ? removeItem(buy_data) : 'buy_data.qty'">@{{buy_data.qty}}</div>
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
</html> --}}

<!-- Nav -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="{{asset('css/cart.css')}}">
  <title>Add to Cart Interaction | CodyHouse</title>
</head>
<body>
<main class="cd-main container margin-top-xxl">
  <div class="text-component text-center">
    <h1>Add to Cart Interaction</h1>
    <p class="flex flex-wrap flex-center flex-gap-xxs">
      <a class="cd-article-link" href="https://codyhouse.co/gem/add-to-cart-interaction">📝 View Tutorial</a>
      <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
    </p>
  </div>
</main>

<div class="cd-cart cd-cart--empty js-cd-cart">
	<a href="#0" class="cd-cart__trigger text-replace">
		Cart
		<ul class="cd-cart__count"> <!-- cart items count -->
			<li>1</li>
			<li>2</li>
		</ul> <!-- .cd-cart__count -->
	</a>

	<div class="cd-cart__content">
		<div class="cd-cart__layout">
			<header class="cd-cart__header">
				<h2>Cart</h2>
				<span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
			</header>
			
			<div class="cd-cart__body">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<footer class="cd-cart__footer">
				<a href="#0" class="cd-cart__checkout">
          <em>Checkout - $<span>0</span>
            <svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
            </svg>
          </em>
        </a>
			</footer>
		</div>
	</div> <!-- .cd-cart__content -->
</div> <!-- cd-cart -->
<script src="{{ asset('js/main.js') }}"></script> <!-- util functions included in the CodyHouse framework -->
<script src="{{ asset('js/util.js') }}"></script> 
</body>
</html>