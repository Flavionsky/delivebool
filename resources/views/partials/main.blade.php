<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Delivebool - Home</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> {{-- da eliminare solo da qui --}}
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- COPIARE SOLO DA QUI -->
        @section('content')
        <main>
            <section id="selection-1">
                <div class="container">
                    <h1>La selezione di Delivebool</h1>
                    <div class="blocks flex">

                        <div class="block comfort-food">
                            <div class="top-block">
                                <div class="img">
                                    
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
                <!-- <section id="favorite-food-2">

                </section> -->
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
                <!-- <section id="news-4">

                </section>
                <section id="work-with-us-5">

                </section> -->


        </main>
        @endsection
        <!-- COPIARE FINO A QUI -->
    </body>
</html>
