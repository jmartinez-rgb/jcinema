@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
@endsection
@section('content')
    <form class="formulario" method="POST" action="{{route('register')}}">
        @csrf
        <h1>REGISTRO</h1>
        <div class="contenido">
    
            <div class="contenedor-input">
                <div id="nombre-apellido">
                    <i class="far fa-user"></i>
                    <input type="text" placeholder="Nombre de usuario" class="text-other" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="contenedor-input">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Contraseña" class="text-other" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
    
            <div class="contenedor-input">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Repetir contraseña" class="text-other" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
    
            <div class="contenedor-input"> 
                <i class="icon-gmail icon"></i>
                <input placeholder="Correo electrónico" class="text-other" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <input type="submit" value="Registrarse" class="boton">
            <p>Al registrarse, acepta nuestras Condiciones de uso y Política de privacidad </p>
            <p>¿Ya tienes una cuenta?<a href="{{route('login')}}" class="link-login"> Iniciar Sesión</a></p>
        </div>
    </form>
@endsection
