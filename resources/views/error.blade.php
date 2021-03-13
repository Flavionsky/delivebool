@extends('layouts.app')

@section('content')
<h1>Errore</h1>

<h4>{{$errormessage}}</h4>

<a href="{{route('welcomepage')}}">Torna alla Home</a>
@endsection