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

                @foreach($restaurant->foods as $food)
                    <tr>
                        <th scope="row">{{ $food->id }}</th>
                        <td><p><strong>{{ $food->name }}</strong></p></td>
                        <td><img src="{{ asset($food->image) }}" alt="cibo"></td>
                        <td><p>{{ $food->price }}</strong></p></td>
                        <td><p>{{ $food->kind_of_food }}</p></td>
                        <td><p>{{ $food->description }}</p></td>
                        @if ($food->visibility == 1)
                        <td><p>{{ $food->visibility = "Sì"}}</p></td>
                        @else
                        <td><p>{{ $food->visibility = "No"}}</p></td>
                        @endif
                        <td>
                            <a href="{{ route('foods.edit', $food) }}"><button type="submit">Modifica</button></a>
                        </td>
                        <td>
                            <form action="{{route('foods.destroy', $food)}}" method="POST">
                                 @CSRF
                                 @method('DELETE')
                                 <button type="submit">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



        @endsection
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