@section('title')
Delivebool - Crea un nuovo account
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
            <div class="header0height">
                <div class="nav">
                    <div class="logo">
                        <a href="{{ route('welcomepage') }}"><img src="./img/delivebool-logo-white.png" alt="delivebool logo"></a>
                    </div>
                    <div class="buttons">
                        @if(Auth::check())
                        <div class="registrati-o-accedi">
                            <span><a href="{{ route('home') }}">La tua dashboard</span></a>
                        </div>
                        @endif
                        @guest
                        <div class="collabora-con-noi" id="prova" onclick="dropDown1()">
                            <i class="fas fa-chevron-down"></i>
                            <span class="unselectable">Collabora con noi</span>
                            <div id="drop-down-1" class="active unselectable">
                                    <div class="registrati-o-accedi">
                                        @if(!Auth::check())
                                        <span class="registrati"><a href="{{ route('register') }}">Crea un nuovo account</span></a>
                                        <span class="accedi"><a href="{{ route('home') }}">Accedi</a></span>
                                        @endif
                                    </div>
                            </div>
                        </div>
                        @endguest
                        @if(!Auth::check())
                        <div class="registrati-o-accedi" style="display: none">
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
                        @if(Auth::check())
                        <div class="menu">
                            <i class="fas fa-bars"></i>
                            <span>Menu</span>
                        </div>
                        @endif
                    </div>
                </div>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="registercard-box">

                <div class="registercard">
                    <div class="card-header">
                        <h2>Diventa subito partner di Delivebool </h2>
                    </div>

                    <div class="card-body form">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            @method('post')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome ristorante') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo e-mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Immagine') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image">

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Conferma password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" required autocomplete="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Città') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                        name="city" value="{{ old('city') }}" required autocomplete="city">

                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="p_iva"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Partita IVA') }}</label>

                                <div class="col-md-6">
                                    <input id="p_iva" type="text" class="form-control @error('p_iva') is-invalid @enderror"
                                        name="p_iva" value="{{ old('p_iva') }}" required autocomplete="p_iva">

                                    @error('p_iva')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="types"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Selezionare le tipologie del tuo ristorante') }}</label>

                                <div class="col-md-6">
                                    <ul class="form-checkbox">
                                        <li><input type="checkbox" name="types[]" value="1">Cinese</li>
                                        <li><input type="checkbox" name="types[]" value="2">Giapponese</li>
                                        <li><input type="checkbox" name="types[]" value="3">Romano</li>
                                        <li><input type="checkbox" name="types[]" value="4">Pizzeria</li>
                                        <li><input type="checkbox" name="types[]" value="5">Pesce</li>
                                        <li><input type="checkbox" name="types[]" value="6">Gelateria</li>
                                        <li><input type="checkbox" name="types[]" value="7">Yoghurteria</li>
                                        <li><input type="checkbox" name="types[]" value="8">Indiano</li>
                                        <li><input type="checkbox" name="types[]" value="9">Siciliano</li>
                                        <li><input type="checkbox" name="types[]" value="10">Tunisino</li>
                                        <li><input type="checkbox" name="types[]" value="11">Vegan</li>
                                        <li><input type="checkbox" name="types[]" value="12">Fast Food</li>
                                    </ul>

                                    @error('types')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <div class='form-button-center'>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrati') }}
                                    </button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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

<script>
    function dropDown1() {
        var element = document.getElementById("drop-down-1");
        element.classList.toggle("active");
    }
</script>

</body>
</html>
