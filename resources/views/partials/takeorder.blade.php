@extends('layouts.layout')


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="nav">
                <div class="logo">
                    <img src="../img/logo.png" alt="deliveroo logo">
                </div>
                <div class="buttons">


                    <label for="site-search"></label>
                    <input type="search" id="site-search" name="q"
                       aria-label="Search through site content">

                    <button>Search</button>
                    
                    <div class="registrati-o-accedi">
                        <i class="fas fa-shopping-cart"></i>
                       <span> <a href="{{ route('ordina') }}">Vai al carrello</span></a>
                    </div>
                    
            </div>
                    
                        
    
    
                     
                    
                    
                    
    
                
                
            </nav>

        </div>
        

        <main class="py-4">
            @yield('content')
        </main>

        @section('footer')
         @yield('partials.footer')
        @endsection
    </div>
</body>
</html>

</body>
</html>