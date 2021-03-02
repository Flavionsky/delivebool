@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Inserisci un nuovo piatto</h1>
    </div>
    <div class="col-12">
        <form action="{{ route('restaurants.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="form-group">
            <label>{{__('Nome')}}</label>
            <input class="form-control" name="name" placeholder="Inserisci il nome del Piatto" type="text">
            @error('name')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('Prezzo')}}</label>
            <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" placeholder="Inserisci il prezzo" min="1" step=".01">
            @error('price')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('Immagine')}}</label>
            <input class="form-control @error('image') is-invalid @enderror" name="image" placeholder="Inserisci un Immagine" type="file">
            @error('image')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('Descrizione')}}</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" type="text" placeholder="Inserisci una descrizione"></textarea>
            @error('description')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('Tipo di portata')}}</label>
            <input name="kind_of_food" class="form-control @error('kind_of_food') is-invalid @enderror" type="text" placeholder="Appetizer, primi, secondi, ecc.."></input>
            @error('kind_of_food')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>

        <div class="form-group">
            <label>{{__('Visibilità del piatto al pubblico')}}</label>
            <i>Inserire 1 se si vuole mostrare, altrimenti mettere 0</i>
            <input name="visibility" class="form-control @error('visibility') is-invalid @enderror" type="number" value="1"></input>
            @error('visibility')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Crea"/>
        </div>
        </form>
    </div>
</div>
@endsection