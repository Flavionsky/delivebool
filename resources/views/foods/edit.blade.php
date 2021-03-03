@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Modifica il piatto</h1>
    </div>
    <div class="col-12">
        <form action="{{ route('foods.update', $food) }}" method="POST" enctype='multipart\form-data'>
        @csrf
        @method('patch')

        <div class="form-group">
            <label>{{__('Nome')}}</label>
            <input class="form-control" name="name" placeholder="Inserisci il nome del Piatto" type="text" value="{{ $food->name}}">
            @error('name')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('Prezzo')}}</label>
            <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" placeholder="Inserisci il prezzo" min="1" step=".01" value="{{ $food->price}}">
            @error('price')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('Immagine')}}</label>
            <input class="form-control @error('image') is-invalid @enderror" name="image" placeholder="Inserisci un Immagine" type="file" value="{{ $food->image}}">
            @error('image')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('Descrizione')}}</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" type="text" placeholder="Inserisci una descrizione">{{ $food->description}}</textarea>
            @error('description')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <label>{{__('Tipo di portata')}}</label>
            <input name="kind_of_food" class="form-control @error('kind_of_food') is-invalid @enderror" type="text" placeholder="Appetizer, primi, secondi, ecc.." value="{{ $food->kind_of_food}}"></input>
            @error('kind_of_food')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>

        <div class="form-group">
            <label>{{__('Visibilità del piatto al pubblico')}}</label>
            <i>Inserire 1 se si vuole mostrare, altrimenti mettere 0</i>
            <input name="visibility" class="form-control @error('visibility') is-invalid @enderror" type="number" value="{{ $food->visibility}}"></input>
            @error('visibility')

            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Modifica"/>
        </div>
        </form>
    </div>
</div>
@endsection