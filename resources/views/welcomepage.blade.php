@extends('layouts.layout')

@section('title')
Delivebool - Home
@endsection

@section('content')

<main>

    <section id="something-else-3">
        <div class="container">
            <h1>Di cosa hai voglia oggi?</h1>
            <div class="categories">
                <div id="app">
                    <front-page></front-page>
                </div>

            </div>

          <script src={{ mix('js/app.js') }}></script>
        </div>
    </section>


    <section id="selection-1">
        <div class="container">
            <h1>La selezione di Delivebool</h1>
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
                            <h1>Esclusiva Delivebool</h1>
                        </div>
                    </div>
                    <div class="bottom-block">
                        <p>I più famosi, i più buoni, i preferiti. Quelli che trovi solo su Delivebool.</p>
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
                       <h2>Delivebool per Croce Rossa Italiana</h2>
                       <p>Delivebool sta raccogliendo fondi per fornire cibo gratuito alle famiglie più in difficoltà, attraverso la Croce Rossa Italiana (CRI). Puoi contribuire alla raccolta fondi facendo una donazione qui.</p>
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
                       <p>Ordina la tua mozzarella preferita a casa tua da Obicà grazie alla consegna a domicilio di Delivebool.</p>
                   </div>
               </div>

           </div>


           <div class="blocks flex-2">

               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/lievita.jpg'}}" alt="">
                       <h2>Lievità</h2>
                       <p>Ordina la tua pizza preferita a casa tua da Lievità grazie alla consegna a domicilio di Delivebool.</p>
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
                        <p>Ordina il tuo sushi preferito a casa tua da Daruma Sushi grazie alla consegna a domicilio di Delivebool.</p>
                    </div>
                </div>

           </div>


           <div class="blocks flex-2">

               <div class="block comfort-food">
                   <div class="top-block-2">
                       <img class="" src="{{'../img/temakinho.jpg'}}" alt="">
                       <h2>Temakinho</h2>
                       <p>Ordina il tuo sushi preferito a casa tua da Temakinho grazie alla consegna a domicilio di Delivebool.</p>
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
                       <p>Ordina i tuoi piatti preferiti della cucina giapponese a casa tua da Macha grazie alla consegna a domicilio di Delivebool.</p>
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
                                <h2>Delivebool per le Aziende</h2>
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
                <h1>Lavora con delivebool</h1>
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
                            <p>Diventa partner di Delivebool e raggiungi sempre più clienti. Ci occupiamo noi della consegna, così che la tua unica preoccupazione sia continuare a preparare il miglior cibo.</p>
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
