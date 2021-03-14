@extends('layouts.layout')

@section('title')
Delivebool - Modifica un piatto
@endsection

@section('content')

<div class="container">
    <div class="registercard-box">
        <div class="registercard">
            <div class="card-header">
                <h2>Modifica il piatto</h2>
            </div>
        <div class="card-body">
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
                <input class="form-control @error('image') is-invalid @enderror" name="image" type="file">
                <img src="{{asset($food->image)}}" alt="immagine cibo">
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

            <div class="form-check">
                <input class="form-check-input" type="radio" name="visibility" {{ $food->visibility == 0 ? 'checked' : '' }} value="0" id="visibility">

                <label class="form-check-label" for="visibility">
                    Non Disponibile
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="visibility" {{ $food->visibility == 1 ? 'checked' : '' }} value="1" id="visibility">

                <label class="form-check-label" for="visibility">
                    Disponibile
                </label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Modifica"/>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
