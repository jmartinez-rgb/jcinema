@extends('layouts.app')

@section('content')
    <div class="caja-titulo">
      <h2>Cartelera</h2>
    </div>
    <div class="page-wrapper">
      <div class="post-slider">
        <i class="fas fa-chevron-left prev1"></i>
        <i class="fas fa-chevron-right next1"></i>
        <div class="post-wrapper1">
          <div class="post">
            <a href="#">
              <img src="{{asset('img/img1.jpg')}}" class="slider-image">
              <div class="letra">JOKER</div>
            </a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img2.jpg')}}" class="slider-image"></a>
            <div class="letra">IT 2</div>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img3.jpg')}}" class="slider-image"></a>
            <div class="letra">Angry Birds</div>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img4.jpg')}}" class="slider-image"></a>
            <div class="letra">Aladdin</div>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img5.jpg')}}" class="slider-image"></a>
            <div class="letra">Maléfica</div>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img6.jpg')}}" class="slider-image"></a>
            <div class="letra">Toy Story</div>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img7.jpg')}}" class="slider-image"></a>
            <div class="letra">Familia Adams</div>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img8.jpg')}}" class="slider-image"></a>
            <div class="letra">Terminator</div>
          </div>
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
          <div class="post">
            <a href="#"><img src="{{asset('img/img2-1.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img2-2.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img2-3.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img2-4.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img2-5.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img2-6.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img2-7.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img2-8.jpg')}}" class="slider-image"></a>
          </div>
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
          <div class="post">
            <a href="#"><img src="{{asset('img/img1.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img2.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img3.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img4.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img5.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img6.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img7.jpg')}}" class="slider-image"></a>
          </div>
          <div class="post">
            <a href="#"><img src="{{asset('img/img8.jpg')}}" class="slider-image"></a>
          </div>
        </div>
      </div>
    </div>

@endsection