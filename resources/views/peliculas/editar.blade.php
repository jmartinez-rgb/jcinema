@extends('layouts.app')
@section('content')
@if(session('mensaje'))
	<div class="alert alert-success">{{ session('mensaje') }}</div>
@endif
<form class="container text-white" action="{{ route('peliculas.update', $detalles->id) }}" method="POST" enctype="multipart/form-data"><br>
  <h3>Editar pelicula: {{$detalles->nombre}}</h3><br>
  @method('PUT')
  @csrf
  @error('nombre')
    <div class="alert alert-danger">
      El nombre es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @enderror
  @error('director')
    <div class="alert alert-danger">
      El director es obligatorio
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @enderror
  @error('fecha')
    <div class="alert alert-danger">
      La fecha es obligatoria
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @enderror
  @error('descripcion')
    <div class="alert alert-danger">
      La descripcion es obligatoria
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @enderror
  @error('imagen_p')
    <div class="alert alert-danger">
      La imagen es obligatoria
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @enderror
  @error('trailer')
    <div class="alert alert-danger">
      El trailer es obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @enderror
  <div class="row">
  <div class="col form-group">
    <label for="exampleFormControlInput1">Pelicula-nombre</label>
    <input type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1" placeholder="nombre" name="nombre" value="{{$detalles->nombre}}">
  </div>
  <div class="col form-group">
    <label for="exampleFormControlInput1">Director</label>
    <input type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1" placeholder="director" name="director" value="{{$detalles->director}}">
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha</label>
    <input type="date" class="form-control bg-dark text-white" id="exampleFormControlInput1" placeholder="fecha" name="fecha" value="{{$detalles->fecha}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control bg-dark text-white" id="exampleFormControlSelect1" name="categoria" value="{{$detalles->categoria}}">
      <option>cartelera</option>
      <option>estreno</option>
    </select>
  </div>
  <div class="row">
  <legend class="col-form-label col-sm-2 pt-0">Subtitulos</legend>
  <div class="col-sm-10">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="subtitulo" id="gridRadios1" value="si" checked value="{{ $detalles->subtitulo }}">
      <label class="form-check-label" for="gridRadios1">
        Si
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="subtitulo" id="gridRadios2" value="no" value="{{ $detalles->subtitulo }}>
      <label class="form-check-label" for="gridRadios2">
        No
      </label>
    </div>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control bg-dark text-white" id="exampleFormControlTextarea1" name="descripcion" rows="3">{{$detalles->descripcion}}</textarea>
  </div>
  <label for="exampleFormControlTextarea1">Imagen</label>
  <div class="custom-file">

    <input type="file" class="custom-file-input" id="customFile" name="imagen_p" value="{{$detalles->imagen_p}}">
    <label class="custom-file-label bg-dark text-white" for="customFile">Choose file</label>
  </div>
  <div class="form-group"><br>
    <label for="exampleFormControlInput1">URL-trailer-youtube</label>
    <input type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1" placeholder="nombre" name="trailer" value="{{$detalles->trailer}}">
  </div>
  <div class="form-group"><br>
    <button class="btn btn-warning btn-block" type="submit">Editar</button>
  </div>

</form>
@endsection