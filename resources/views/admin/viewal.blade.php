@extends('layouts.plantilla')
@section('section')

<div class="container-fluid text-center">
    <h1 class="display-3 p-3">-Listado de alumnos-</h1>
</div>

@if ($errors->any())
<div class="alert alert-danger text-center" role="alert">
    Ingresar DNI
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container mb-5" >

  <!-- buscador por dni -->
  <div class="mb-5 mt-5 row" style="margin-left:25rem">
    <form action="formsearchal" method="post">
      @csrf
      <div class="form-row border-dark bg-white shadow p-3 mb-3 bg-white rounded">
        <div class="col ">
          <input name="dni" type="integer" class="form_input" placeholder="DNI" required>
        </div>
        <div class="col ">
          <button type="submit" class="btn btn-dark btn-block">Buscar</button>
        </div>
      </div>
    </form>
  </div>
   <!-- buscador por dni -->

    <table class="table table-striped table-dark text-center">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">DNI</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <td>{{$item->nombre}} </td>
                    <td>{{$item->apellido}}</td>
                    <td>{{$item->dni}}</td>
                </tr>
            @endforeach
          
        </tbody>
      </table>

</div>
@endsection