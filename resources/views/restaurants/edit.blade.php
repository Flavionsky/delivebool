@extends('layouts.layout')

@section('title')
Delivebool - Modifica il tuo account
@endsection

@section('content')

            <div class="container dashboard">


                <div class="registercard">
                    <div class="card-header">
                        <h2>Diventa subito partner di Delivebool </h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('restaurants.update', $restaurant) }}" enctype='multipart\form-data'>
                            @csrf
                            @method('patch')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Ristorante') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $restaurant->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $restaurant->email  }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>{{__('Immagine')}}</label>
                                <input class="form-control @error('image') is-invalid @enderror" name="image" placeholder="Inserisci un Immagine" type="file" value="{{$restaurant->image}}">
                                <img src="{{asset($restaurant->image)}}" alt="immagine ristorante">
                                @error('image')
                
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ $restaurant->address  }}" required autocomplete="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                        name="city" value="{{ $restaurant->city  }}" required autocomplete="city">

                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="p_iva"
                                    class="col-md-4 col-form-label text-md-right">{{ __('P.IVA') }}</label>

                                <div class="col-md-6">
                                    <input id="p_iva" type="text" class="form-control @error('p_iva') is-invalid @enderror"
                                        name="p_iva" value="{{ $restaurant->p_iva  }}" required autocomplete="p_iva">

                                    @error('p_iva')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="types"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Selezionare le tipologie del tuo Ristorante') }}</label>

                                <div class="col-md-6">

                                    <ul>
                                        @foreach ($types as $type)
                                        <li><input type="checkbox" name="types[]" value="{{$type->id}}" {{ $restaurant->types->contains($type) ? 'checked' : '' }}>{{$type->name}}</li>
                                        @endforeach
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
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Modifica') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

@endsection
