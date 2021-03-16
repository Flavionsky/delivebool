@extends('layouts.layout')

@section('title')
    Checkout
@endsection

@section('content')



<div id="payment-section">


    <div class="payment container dashboard">
        <div class="payment registercard">
            <h1>Pagamento ordine</h1>

            <div class="paymentcard">
                  <div class="left-payment">
                      <h2>Dati del pagamento</h2>

            <div class="spacer"></div>

            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('success') }}" method="POST" id="payment-form">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name_on_card">Nome</label>
                            <input type="text" class="form-control" id="name_on_card" name="name_on_card">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name_on_card">Cognome</label>
                            <input type="text" class="form-control" id="surname_on_card" name="surname_on_card">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Indirizzo</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">Città</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobile_phone">Cellulare</label>
                            <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="amount">Totale</label>
                            <input type="text" readonly="readonly" class="form-control payment" id="amount" name="amount"
                                value="{{ $total }}">
                            <input type="hidden" name="restaurantId" value="{{$restaurantId}}">
                            @foreach ($buyitems as $item)
                                <input type="hidden" name="itemid[]" value="{{ $item->id }}">
                                <input type="hidden" name="itemqty[]" value="{{ $item->qty }}">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="cc_number">Carta di Credito</label>

                        <div class="form-group" id="card-number">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="expiry">Scadenza</label>

                        <div class="form-group" id="expiration-date">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cvv">CVV</label>

                        <div class="form-group" id="cvv">

                        </div>
                    </div>

                </div>

                <div class="spacer"></div>

                <div id="paypal-button"></div>

                <div class="spacer"></div>

                <input id="nonce" name="payment_method_nonce" type="hidden" />
                <button type="submit" class="btn btn-success">Paga ora</button>
            </form>
            </div>
            <div class="right-payment">
                <h2>Il tuo ordine:</h2>


                <table class="table-payment">
                    <thead>
                        <tr>
                            <th scope="col">Quantità</th>
                            <th scope="col">Nome Portata</th>
                            <th scope="col">Prezzo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buyitems as $item)
                        <tr>
                            <th scope="row">{{ $item->qty }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                        </tr>
                        @endforeach
                        <tr><td class="table-total" colspan="3"><strong>Totale: </strong>€ {{$total}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <script src="https://js.braintreegateway.com/web/3.38.1/js/client.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.38.1/js/hosted-fields.min.js"></script>
    <script src="{{ asset('js/script.js') }}" charset="utf-8"></script>

    <!-- Load PayPal's checkout.js Library. -->
    <script src="https://www.paypalobjects.com/api/checkout.js" data-version-4 log-level="warn"></script>

    <!-- Load the PayPal Checkout component. -->
    <script src="https://js.braintreegateway.com/web/3.38.1/js/paypal-checkout.min.js"></script>
    <script>
        var form = document.querySelector('#payment-form');
        var submit = document.querySelector('input[type="submit"]');
        braintree.client.create({
            authorization: '{{ $token }}'
        }, function(clientErr, clientInstance) {
            if (clientErr) {
                console.error(clientErr);
                return;
            }
            braintree.hostedFields.create({
                client: clientInstance,
                styles: {
                    'input': {
                        'font-size': '14px'
                    },
                    'input.invalid': {
                        'color': 'red'
                    },
                    'input.valid': {
                        'color': 'green'
                    }
                },
                fields: {
                    number: {
                        selector: '#card-number',
                        placeholder: '4111 1111 1111 1111'
                    },
                    cvv: {
                        selector: '#cvv',
                        placeholder: '123'
                    },
                    expirationDate: {
                        selector: '#expiration-date',
                        placeholder: '03/22'
                    }
                }
            }, function(hostedFieldsErr, hostedFieldsInstance) {
                if (hostedFieldsErr) {
                    console.error(hostedFieldsErr);
                    return;
                }
                // submit.removeAttribute('disabled');
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    hostedFieldsInstance.tokenize(function(tokenizeErr, payload) {
                        if (tokenizeErr) {
                            console.error(tokenizeErr);
                            return;
                        }

                        document.querySelector('#nonce').value = payload.nonce;
                        form.submit();
                    });
                }, false);
            });

            braintree.paypalCheckout.create({
                client: clientInstance
            }, function(paypalCheckoutErr, paypalCheckoutInstance) {
                if (paypalCheckoutErr) {
                    console.error('Error creating PayPal Checkout:', paypalCheckoutErr);
                    return;
                }
                paypal.Button.render({
                    env: 'sandbox', // or 'production'
                    commit: true,
                    payment: function() {
                        return paypalCheckoutInstance.createPayment({
                            // Your PayPal options here. For available options, see
                            // http://braintree.github.io/braintree-web/current/PayPalCheckout.html#createPayment
                            flow: 'checkout', // Required
                            amount: 13.00, // Required
                            currency: 'USD', // Required
                        });
                    },
                    onAuthorize: function(data, actions) {
                        return paypalCheckoutInstance.tokenizePayment(data, function(err,
                            payload) {
                            document.querySelector('#nonce').value = payload.nonce;
                            form.submit();
                        });
                    },
                    onCancel: function(data) {
                        console.log('checkout.js payment cancelled', JSON.stringify(data, 0,
                            2));
                    },
                    onError: function(err) {
                        console.error('checkout.js error', err);
                    }
                }, '#paypal-button').then(function() {});
            });
        });

    </script>
@endsection
