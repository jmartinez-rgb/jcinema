@extends('layouts.app')

@if(Auth::check() && Auth::user()->name  == 'jmartinez')
@section('content')
  @if(session('mensaje'))
    <div class="alert alert-success">
      {{ session('mensaje') }}
    </div>
  @endif
<form class="container text-white" action="{{ route('peliculas.crear') }}" method="POST" enctype="multipart/form-data"><br>
  <h3>Insertar peliculas</h3><br>
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
    <input type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1" placeholder="nombre" name="nombre" value="{{old('nombre')}}">
  </div>
  <div class="col form-group">
    <label for="exampleFormControlInput1">Director</label>
    <input type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1" placeholder="director" name="director" value="{{old('director')}}">
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha</label>
    <input type="date" class="form-control bg-dark text-white" id="exampleFormControlInput1" placeholder="fecha" name="fecha" value="{{old('fecha')}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control bg-dark text-white" id="exampleFormControlSelect1" name="categoria" value="{{old('categoria')}}">
      <option>cartelera</option>
      <option>estreno</option>
    </select>
  </div>
  <div class="row">
  <legend class="col-form-label col-sm-2 pt-0">Subtitulos</legend>
  <div class="col-sm-10">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="subtitulo" id="gridRadios1" value="si" checked>
      <label class="form-check-label" for="gridRadios1">
        Si
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="subtitulo" id="gridRadios2" value="no">
      <label class="form-check-label" for="gridRadios2">
        No
      </label>
    </div>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control bg-dark text-white" id="exampleFormControlTextarea1" name="descripcion" rows="3" value="{{old('descripcion')}}"></textarea>
  </div>
  <label for="exampleFormControlTextarea1">Imagen</label>
  <div class="custom-file">

    <input type="file" class="custom-file-input" id="customFile" name="imagen_p" value="{{old('imagen_p')}}">
    <label class="custom-file-label bg-dark text-white" for="customFile">Choose file</label>
  </div>
  <div class="form-group"><br>
    <label for="exampleFormControlInput1">URL-trailer-youtube</label>
    <input type="text" class="form-control bg-dark text-white" id="exampleFormControlInput1" placeholder="nombre" name="trailer" value="{{old('trailer')}}">
  </div>
  <div class="form-group"><br>
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
  </div>

</form>
<div class="container mt-5">
  @if(session('eliminar'))
    <div class="alert alert-success">
      {{ session('eliminar') }}
    </div>
  @endif
<h3 class="text-white">Peliculas-carteleras-funciones</h3><br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pelicula</th>
      <th scope="col">Categoria</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
    @foreach($pel as $item)
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td><a href="{{route('peliculas.detalle', $item)}}" class="text-warning">{{$item->nombre}}</a></td>
      <td>{{$item->categoria}}</td>
      <td>
        <a href="{{route('peliculas.editar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
        <form action="{{route('peliculas.eliminar', $item)}}" method="POST" class="d-inline">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-times"></i></button>
        </form>
      </td>
    </tr>
    @endforeach()
  </tbody>
</table>
</div>
@endsection

@else
@section('content')
    <div class="caja-titulo">
      <h2>Cartelera</h2>
    </div>
    <div class="page-wrapper">
      <div class="post-slider">
        <i class="fas fa-chevron-left prev1"></i>
        <i class="fas fa-chevron-right next1"></i>
        <div class="post-wrapper1">
          @foreach($pel as $item)
          @if ($item ->categoria == 'cartelera')
          <div class="post">
            <a href="{{route('peliculas.detalle',$item)}}">
              <img src="img/{{ $item -> imagen_p }}" class="slider-image">
              <div class="letra">{{ $item -> nombre }}</div>
            </a>
          </div>
          @endif
          @endforeach()

        </div>
      </div>
    </div>
    <div class="caja-titulo">
      <h2>Estrenos</h2>
    </div>
    <div class="page-wrapper">
      <div class="post-slider">
        <i class="fas fa-chevron-left prev2"></i>
        <i class="fas fa-chevron-right next2"></i>
        <div class="post-wrapper2">
          @foreach($pel as $item)
          @if ($item -> categoria == 'estreno')
          <div class="post">
            <a href="{{route('peliculas.detalle', $item)}}">
              <img src="img/{{ $item -> imagen_p }}" class="slider-image">
              <div class="letra">{{ $item -> nombre }}</div>
            </a>
          </div>
          @endif
          @endforeach()
        </div>
      </div>
    </div>
    <div class="caja-titulo">
      <h2>Populares</h2>
    </div>
    <div class="page-wrapper">
      <div class="post-slider">
        <i class="fas fa-chevron-left prev3"></i>
        <i class="fas fa-chevron-right next3"></i>
        <div class="post-wrapper3">
          @foreach($pel as $item)
          @if ($item ->categoria == 'cartelera')
          <div class="post">
            <a href="{{route('peliculas.detalle', $item)}}">
              <img src="img/{{ $item -> imagen_p }}" class="slider-image">
              <div class="letra">{{ $item -> nombre }}</div>
            </a>
          </div>
          @endif
          @endforeach()
        </div>
      </div>
    </div>

@endsection

@section('articulo-footer')
  <article>
    <div class="banner">
      <div class="noticias">NOTICIAS</div>
    </div>
    <div id="noticias">
      <div class="contenedor-noticias">
        <section class="cuerpo-noticias">
          <img src="../../img/not1.jpg" >
          <h4>Noticias1</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ea sapiente ducimus in accusamus cupiditate repellat blanditiis modi dolor ullam, necessitatibus cum cumque. Voluptatibus accusantium animi ratione quisquam laborum consequatur!</p>
        </section class="cuerpo-noticias">

        <section class="cuerpo-noticias">
          <img src="../../img/not2.jpg" >
          <h4>Noticia2</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ea sapiente ducimus in accusamus cupiditate repellat blanditiis modi dolor ullam, necessitatibus cum cumque. Voluptatibus accusantium animi ratione quisquam laborum consequatur!</p>
        </section class="cuerpo-noticias">

        <section class="cuerpo-noticias">
          <img src="../../img/not3.jpg" >
          <h4>Noticia3</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ea sapiente ducimus in accusamus cupiditate repellat blanditiis modi dolor ullam, necessitatibus cum cumque. Voluptatibus accusantium animi ratione quisquam laborum consequatur!</p>
        </section class="cuerpo-noticias">
      </div>
    </div>
  </article>
  <footer>
    <div class="footer1">
      <div class="redes">Nuestras Redes</div>
      <div class="iconos">
        <div class="fab fa-facebook">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
        <div class="fab fa-twitter-square">&nbsp&nbsp&nbsp&nbsp&nbsp</div>
        <div class="far fa-envelope">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
      </div>
    </div>
    <div class="footer2">
      <div class="info">
        <p>Términos y condiciones</p>
        <p>informacion</p>
      </div>
    </div>
  </footer>
@endsection
@endif