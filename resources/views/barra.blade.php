<nav class="navbar navbar-expand-lg navbar-light bg-warning">

    <a class="navbar-brand" href="{{ url('/informativo') }}">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/libros') }}"> Libros <span class="sr-only">(current)</span></a>
            </li>      
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/informativo') }}"> Editorial <span class="sr-only">(current)</span></a>
            </li>        
        </ul>
    </div>
</nav>