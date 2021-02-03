<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Seminario Parcial 2</title>
        <!-- Cargar archivos de estilos -->
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        @include('barra')
        <div class = "container">
            @yield('contenido')
        </div>
        <!-- Cargar archivos Javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
     <footer class="page-footer font-small black special-color-dark">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h7>Realizado por:</h7>
                <ul class="list-unstyled">
                    <li>
                         <a href="#!">Yasmani Tapia </a>
                         <br><h7>Parcial tipo A</h7>
                         <input type="text" id='nombreCli'> 
                        <button type="submit" class="btn btn-success">Buscar </button>
                        
                    </li>

                </ul>

            </div>
        </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2021 Copyright:
        <a href="https://mdbootstrap.com/"> </a>
    </div>
    <!-- Copyright -->

</footer>
</html>
