<!-- resources/views/layouts/app.blade.php -->
<!doctype html>
<html lang="es-ES"  class="h-100">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Aplicación de reserva y gestión de espacios de la Facultad de Comunicación, Universidad de Sevilla">
        <meta name="author" content="Juan Antonio Fernández, E.E UNITIC Fcom">
        <link rel="icon" href="">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
        <title>@yield('title')</title>

            <style>
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                main > .container {
                    padding: 60px 15px 0;
                }

              @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                  font-size: 3.5rem;
                }
              }
    </style>

        @yield('head')
    </head>
    
    <body class="d-flex flex-column h-100">

        <header>
        </-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
            
                <a class="navbar-brand" href="{{ route('sso-login')}}"><i class="fas fa-home"></i> SGR v1.2: Unidad TIC FCom</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-book"></i> Normativa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-life-ring"></i> Ayuda</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>    
        </header>
        </-- ./NavBar -->


        <!-- Begin page content -->
        <main class="flex-shrink-0">
            <div class="container">

                @section('sidebar')
                
                @show
                            
                @yield('content')
            </div>
        </main>

        <!-- footer -->
        <footer class="footer mt-auto bg-dark py-5">
            <div class="container text-end">
                
                    
                        <a href="http://fcom.us.es" alt="Facultad de Comunicación"><img width="140px" src = "{{ asset('assets/img/logofcom.png') }}"></a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="http://www.us.es" alt="Universidad de Sevilla"><img width="70px" src="{{ asset('assets/img/logo_us.png') }}"></a>
                    
                       
                    <div class="text-secondary mt-3">
                        Developed by UNITIC Facultad de Comunicación. Universidad de Sevilla.
                    </div>
                
            </div>
        </footer>
    
        @section('js')
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
            
        @show
    </body>
</html>