@extends('principal')
@section('contenido')

<div class="container">
<h1> Registro de Libros </h1>
    <form action="{{ url('clientes/registrar') }}" method="POST">
        @csrf
       
        <label for="idlib">IBM</label>
        <input type="text" id='idlib' name='idlib' class="form-control" required> <br> <br>
    
        <label for="tutulolib">Titulo </label>
        <input type="text" id='tutulolib' name='tutulolib' class="form-control" required> <br> <br>

        <label for="cantlib">Cantidad </label>
        <input type="text" id='cantlib' name='cantlib' class="form-control" required> <br> <br>

        <label for="preclib">Precio </label>
        <input type="number" id='preclib' name='preclib' class="form-control" required> <br> <br>

        <label for="editorial">Genero </label>
        <select class="form-select" aria-label="Default select example" name="editorial">
            <option value="" >  </option>
            <option value="" >  </option>
        </select>
    
        <br> <br>
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
@stop