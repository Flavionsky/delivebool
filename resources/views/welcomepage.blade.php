@extends('layouts.layout')

@section('title')
Deliveboo - Home
@endsection

@section('content')

<div class="bg">
    <div class="header main">
        <div class="nav">
            <div class="logo">
                <img src="./img/vectorpaint.svg" alt="deliveroo logo">
            </div>
            <div class="buttons">
                <div class="collabora-con-noi" id="prova" onclick="dropDown1()">
                    <i class="fas fa-chevron-down"></i>
                    <span>Collabora con noi</span>
                    <div id="drop-down-1" class="active">
                        <ul>
                            <li><a href="{{ route('register') }}"><i class="fas fa-utensils"></i> Ristoranti</li>
                            <li><i class="fas fa-briefcase"></i> Lavora con noi</li>
                            <li><i class="far fa-building"></i> Deliveroo per le Aziende</li>
                        </ul>
                    </div>
                </div>
                <div class="registrati-o-accedi">
                    @if(Auth::check())
                    <span><a href="">La tua dashboard</span></a>
                    @else
                    <i class="fas fa-shopping-cart"></i>
                    <span><a href="{{ route('ordina') }}">Ordina</span></a>
                    @endif
                </div>
                @if(!Auth::check())
                <div class="registrati-o-accedi">
                    <span><a href="{{ route('home') }}">Registrati o accedi</span></a>
                </div>
                @endif
                <div class="menu">
                    <i class="fas fa-bars"></i>
                    <span>Menu</span>
                </div>
            </div>
        </div>
        <div class="box-indirizzo">
            <div class="card">
                <h1>I piatti che ami, a domicilio.</h1>
                <div class="text-box">
                    <p>Inserisci il tuo indirizzo per trovare ristoranti nei dintorni</p>
                    <input class="search-bar" type="search" placeholder="Inserisci il tuo indirizzo completo">
                    <button>Cerca</button>
                    <p><a href="#">Accedi&nbsp;</a>per visualizzare i tuoi indirizzi recenti.</p>
                </div>
            </div>
            <div class="campagna-box">
                <img class="campagna" src="./img/campaign.svg" alt="campagna">
                <p>#aCasaTuaConDeliveroo</p>
            </div>
        </div>
    </div>
</div>




<main>
    <section id="selection-1">
        <div class="container">
            <h1>La selezione di Deliveroo</h1>
            <div class="blocks flex">

                <div class="block comfort-food">
                    <div class="top-block">
                        <div class="img">
                            <img class="" src="{{'../img/menu-tag-image-1.jpg'}}" alt="">
                            <h1>Comfort food</h1>
                        </div>
                    </div>
                    <div class="bottom-block">
                        <p>I grandi classici che scaldano il cuore, perfetti per ogni momento.</p>
                    </div>
                </div>

                <div class="block dessert">
                    <div class="top-block">
                        <div class="img">
                            <img class="" src="{{'../img/menu-tag-image-2.jpg'}}" alt="">
                            <h1>Dolci e dessert</h1>
                        </div>
                    </div>
                    <div class="bottom-block">
                        <p>Dolci piaceri per rendere la giornata ancora più gustosa.</p>
                    </div>
                </div>

            </div>

            <div class="blocks flex">
                <div class="block perfect-share">
                    <div class="top-block">
                        <div class="img">
                            <img class="" src="{{'../img/menu-tag-image-3.jpg'}}" alt="">
                            <h1>Perfetti da condividere</h1>
                        </div>
                    </div>
                    <div class="bottom-block">
                        <p>Serve una scusa per stare insieme? Ordina dai ristoranti che trasformeranno la tua serata in una vera festa.</p>
                    </div>
                </div>

                <div class="block exclusive">
                    <div class="top-block">
                        <div class="img">
                            <img class="" src="{{'../img/menu-tag-image-4.jpg'}}" alt="">
                            <h1>Esclusiva Deliveroo</h1>
                        </div>
                    </div>
                    <div class="bottom-block">
                        <p>I più famosi, i più buoni, i preferiti. Quelli che trovi solo su Deliveroo.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="favorite-food-2">
       <div class="container">
           <h1>I tuoi piatti preferiti, consegnati da noi.</h1>
           <div class="blocks flex-2">

               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/crocerossa.jpg'}}" alt="">
                       <h2>Deliveroo per Croce Rossa Italiana</h2>
                       <p>Deliveroo sta raccogliendo fondi per fornire cibo gratuito alle famiglie più in difficoltà, attraverso la Croce Rossa Italiana (CRI). Puoi contribuire alla raccolta fondi facendo una donazione qui.</p>
                   </div>
               </div>

               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/mcdonald.jpg'}}" alt="">
                       <h2>Mc Donald's</h2>
                   </div>
               </div>

               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/obica.jpg'}}" alt="">
                       <h2>Obicà</h2>
                       <p>Ordina la tua mozzarella preferita a casa tua da Obicà grazie alla consegna a domicilio di Deliveroo.</p>
                   </div>
               </div>

           </div>


           <div class="blocks flex-2">

               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/lievita.jpg'}}" alt="">
                       <h2>Lievità</h2>
                       <p>Ordina la tua pizza preferita a casa tua da Lievità grazie alla consegna a domicilio di Deliveroo.</p>
                   </div>
               </div>


               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/pokeria.jpg'}}" alt="">
                       <h2>Pokèria by NIMA</h2>
                   </div>
               </div>

               <div class="block comfort-food">
                    <div class="top-block-2">
                        <img class="" src="{{'../img/sushi.jpg'}}" alt="">
                        <h2>Daruma Sushi - Ponte Milvio e Centro</h2>
                        <p>Ordina il tuo sushi preferito a casa tua da Daruma Sushi grazie alla consegna a domicilio di Deliveroo.</p>
                    </div>
                </div>

           </div>


           <div class="blocks flex-2">

               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/temakinho.jpg'}}" alt="">
                       <h2>Temakinho</h2>
                       <p>Ordina il tuo sushi preferito a casa tua da Temakinho grazie alla consegna a domicilio di Deliveroo.</p>
                   </div>
               </div>


               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/berbere.jpg'}}" alt="">
                       <h2>Berberè Pizzeria</h2>
                   </div>
               </div>

               <div class="block comfort-food">
                    <div class="top-block-2">
                        <img class="" src="{{'../img/giacomorost.jpg'}}" alt="">
                        <h2>Rosticceria Giacomo</h2>

                    </div>
                </div>

           </div>

           <div class="blocks flex-2">

               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/burger_king.jpg'}}" alt="">
                       <h2>Burger King</h2>

                   </div>
               </div>


               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/macha.jpg'}}" alt="">
                       <h2>Macha</h2>
                       <p>Ordina i tuoi piatti preferiti della cucina giapponese a casa tua da Macha grazie alla consegna a domicilio di Deliveroo.</p>
                   </div>
               </div>

               <div class="block comfort-food">
                    <div class="top-block-2">
                        <img class="" src="{{'../img/grom.jpg'}}" alt="">
                        <h2>Grom</h2>
                        <p>Tutti i prodotti sono senza glutine. Sono realizzati senza aggiunta di aromi, coloranti o emulsionanti e creati scegliendo solo il meglio della natura. Innamorati del nostro gelato e gusta anche i nostri biscotti, le creme spalmabili e il nostro cioccolato</p>

                    </div>
                </div>

           </div>

        </section>
    <section id="something-else-3">
        <div class="container">
            <h1>Di cosa hai voglia oggi?</h1>
            <div class="categories">
                <ul>
                    <a href="#"><li>Cinese</li></a>
                    <a href="#"><li>Giapponese</li></a>
                    <a href="#"><li>Romano</li></a>
                    <a href="#"><li>Pizzeria</li></a>
                    <a href="#"><li>Cucina di pesce</li></a>
                    <a href="#"><li>Gelateria</li></a>
                    <a href="#"><li>Yoghurteria</li></a>
                    <a href="#"><li>Indiano</li></a>
                    <a href="#"><li>Siciliano</li></a>
                    <a href="#"><li>Romano</li></a>
                    <a href="#"><li>Tunisino</li></a>
                    <a href="#"><li>Vegan</li></a>
                </ul>
            </div>
        </div>
    </section>

    <section id="novità-deliveroo">
        <div class="container">
            <h1>Novità dalla nostra cucina</h1>
            <div class="blocks flex">

                <div class="block comfort-food">
                    <div class="top-block-3">
                        <div class="business">
                            <img class="" src="{{'../img/menu-tag-image-1.jpg'}}" alt="">

                        </div>
                    </div>


                </div>

                <div class="block dessert">
                    <div class="top-block-3">

                            <div class="aziende">
                                <h2>Deliveroo per le Aziende</h2>
                                    <p>Clienti o colleghi affamati? il nostro team Corporate ti può aiutare.</p>
                                <button type="button" name="button">Contattaci</button>
                            </div>

                    </div>

                </div>

            </div>

            <div class="blocks flex">

                <div class="block perfect-share">
                    <div class="top-block">
                        <div class="apple_google">
                            <h2>Hai già la nostra app?</h2>
                                <p>Scaricala ora - disponibile su Apple store e Google Play!</p>
                            <img src="{{'../img/store.png'}}" alt="">
                        </div>
                    </div>

                </div>

                <div class="block exclusive">
                    <div class="top-block-3">
                        <div class="deliveroo_icon">
                            <img src="{{'../img/menu-tag-image-2.jpg'}}" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


        <section id="work-with-us-5">
            <div class="container text">
                <h1>Lavora con deliveroo</h1>
                <div class="blocks flex-2 ">
                    <div class="box-work red">
                        <img src="{{'../img/riders.jpg'}}" alt="">
                            <h2>Rider</h2>
                            <p>Diventa un rider: flessibilità, ottimi guadagni e un mondo di vantaggi per te.</p>
                        <button type="button" name="button">Unisciti a noi</button>
                    </div>
                    <div class="box-work orange">
                        <img src="{{'../img/restaurants.jpg'}}" alt="">
                            <h2>Ristoranti</h2>
                            <p>Diventa partner di Deliveroo e raggiungi sempre più clienti. Ci occupiamo noi della consegna, così che la tua unica preoccupazione sia continuare a preparare il miglior cibo.</p>
                        <button type="button" name="button">Diventa nostro partner</button>
                    </div>


                        <div class="box-work grey">
                            <img src="{{'../img/team.jpg'}}" alt="">
                                <h2>Lavora con noi</h2>
                                <p>La nostra missione è trasformare il modo in cui le persone mangiano. È un obiettivo ambizioso, come noi, e ci servono persone che ci aiutino a raggiungerlo.</p>
                            <button type="button" name="button">Scopri di più</button>
                        </div>


                </div>


            </div>

        </section>


</main>

@endsection
