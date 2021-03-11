@extends('layouts.layout')

@section('title')
Deliveboo Dashboard - Lista piatti
@endsection

@section('content')
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
        <div class="rest-dashboard-header">
            <div class="left-rest">
                <h1>{{$restaurant->name}}</h1>
                <h2>tipologie ristorante</h2>
                @foreach ($restaurant->types as $type)
                    <p>{{$type->name}}</p>
                @endforeach
                <h3>{{$restaurant->address}}</h3>
                <h3>{{$restaurant->city}}</h3>
            </div>
            <div class="right-rest">
                <img src="restaurant->image" alt="immagine ristorante">
                <h3>{{$restaurant->email}}</h3>

            </div>
        </div>
        <hr>
        <div class="rest-dashboard-main">
            <h2>Piatti del ristorante</h2>


            @foreach ($restaurant->foods as $food)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset($food->image)}}" alt="Card image">
                <div class="card-body">
                  <h5 class="card-title">{{$food->name}}</h5>
                  <strong>€ {{$food->price}}</strong>
                  <p class="card-text">{{$food->description}}</p>
                  <a href="#" class="btn btn-primary">aggiungi</a>
                </div>
              </div> 
            @endforeach
        </div>
    </div>
</div>
</div>

@endsection