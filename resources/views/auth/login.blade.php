@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
@section('content')
  <div class="login-box">
      <img src="../../img/usuario.png" class="avatar" alt="Avatar Image">
      
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- USERNAME INPUT -->
        <label for="username">Correo electronico</label>
        <input placeholder="Ingrese el correo" id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-dark text-white" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingrese la contraseña" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <input type="submit" value="Iniciar Sesión">
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}">Olvidé mi contraseña</a>
        @endif
        <br>
        <a href="{{route('register')}}">Registrarme</a>
      </form>
    </div>
@endsection
