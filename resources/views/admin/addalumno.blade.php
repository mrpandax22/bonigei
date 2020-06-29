@extends('layouts.plantilla')
@section('section')

<div class="container-fluid text-center mt-3">
    <h1 class="display-3"><u>Añadir alumno</u> </h1>
</div>

<div class="container-fluid row">
    <div class="container col-md-3 align-self-center">
        <a href="admin_viewal" class="btn btn-block border" id="buttonoscuro">Ver Alumnos</a>
        <a href="" class="btn btn-block border" id="buttonoscuro">Modificar Alumnos</a>
    </div>
    <div class="container col-md-8 mt-3 pb-3 border border-dark shadow p-3 mb-5 bg-white rounded">
        @if (session('success'))
            <div class="alert alert-success text-center" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger text-center" role="alert">
                Datos incorrectos
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action="formaddal" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input name="nombre" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Apellido</label>
                <input name="nombre" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Dni</label>
                <input name="nombre" type="text" class="form-control" >
            </div>

            <div class="form-group">
            <select class="custom-select">
                <option value="1">Grupo 1</option>
                <option value="2">Grupo 2</option>
            </select>
            </div>
            
            <button type="submit" class="btn btn-success btn-block "> Enviar</button>
        </form>    
    </div>
</div>
    
@endsection