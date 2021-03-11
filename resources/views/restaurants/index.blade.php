@extends('layouts.app')

@section('content')
@foreach ($restaurants as $restaurant)

@endforeach
<div>
    <h2>Ristoranti che consegnano a {{$restaurant->city}}</h2>
</div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$restaurant->name}}</h5>
      <p class="card-text">{{$restaurant->types->name}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endsection
