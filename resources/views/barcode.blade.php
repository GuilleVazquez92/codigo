@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 align="left">Generador de Codigo</h1>
@stop

@section('content')
    <form class="row g-3">
  <div class="col-md-3">
    <label  class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" value="{{$codigo_nuevo}}" readonly="true">
  </div>
  <div class="col-md-9">
    <label  class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre">
  </div>
  <div class="col-12">
    <label  class="form-label">Descripción</label>
    <input type="text" class="form-control" id="descripcion" >
  </div>
  <div class="col-4">
    <label class="form-label">Peso</label>
    <input type="text" class="form-control" id="peso" >
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
 <div class="col-md-12">
    <label for="inputCity" class="form-label">Codigo de Barras</label>
    <br>
    @php
    echo $codigo_barras;
    @endphp
  </div>
  <br><br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cargar</button>
  </div>
</form>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




