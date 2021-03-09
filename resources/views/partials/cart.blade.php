@extends('layouts.layout')
<div id="app">
    <div class="container">
        <div class="nav">
            <div class="logo">
                <img src="../img/logo.png" alt="deliveroo logo">
            </div>
            
        </nav>
            
    </div>   
     {{-- fare if else --}}
    <div class="container">
        <div id="cart-button"class="checkout-without-container">
            <h1 class="text-center mb-5">Non ci sono prodotti nel carrello</h1>
            <a href="">
                <button type="submit" id="">Torna allo shopping</button>
            </a>
        </div>

    </div>

    <h1 class="text-center mb-4"> Il tuo carrello</h1>
    <div class="d-flex justify-content-center align-item-center mb-3">
        <marquee id="marquee-cart" class="p-2" style="background-color: #00ccbc; color: #fff;" loop="-1" direction="left"> Con un ordine superiore ai 15€, la consegna è gratuita ! </marquee>
    </div>

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Piatti</th>
            <th style="width:10%">Prezzo</th>
            <th style="width:8%">Quantità</th>
            <th style="width:22%" class="text-center">Subtotale</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

            
        
            <tr>
                <td data-th="Product" >
                    <div class="row cart-title-container">
                        <div class="col-sm-3 hidden-xs">
                            <img src="" alt="" class="img-fluid cart-fluid">
                        </div>
                           
                         
                            
                                
                        
                        <div class="col-sm-9 d-flex align-items-center">
                            <h4 class="nomargin"></h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price" >€ <span class="hideItem"></span></td>
                <td data-th="Quantity">
                    <input type="number" min="1" value="" class="form-control quantity"/>
                </td>
                <td data-th="Subtotal" class="text-center">€ <span class="product-subtotal hideItem"></span></td>
                <td class="actions" data-th="">
                    <div id="cart-button">
                        
                        <button type="button" name="button"><i class="fas fa-sync-alt"></i></button>
                        <button type="button" name="button"><i class="fas fa-trash-alt"></i></button>
                        
                        
                    </div>
                </td>
            </tr>
        </tbody>
    
    
            
                
               
    </table>
    <main class="py-4">
        @yield('content')
    </main>

  
</div>