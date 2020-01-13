<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}">
</head>
<body>
  <header>
    <div class="molde-login">
      <p><a href="Login.html"> LOGIN</a></p>
    </div>
    <h1 ><a href="../Proyecto/Proyecto.html" class="enlace">JCINEMA</a></h1>
    <input type="checkbox" id="menu-bar">
    <label class="icon-menu" for="menu-bar"></label>
    <div class="sidebar">    
      <ul>
        <a><input type="text" placeholder="buscar" class="search"></a>
        <li><a href="Registro.html">Registrarse</a></li>
        <li><a href="Proyecto.html">Inicio</a></li>
        <li><a href="">Cartelera</a></li>
        <li><a href="">Estrenos</a></li>
        <li><a href="">Contactos</a></li>
      </ul>
    </div>
  </header>
  <main>
    <h1></br>CARTELERA</h1> 
    <div class="contenedor-movies">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <img src="http://placehold.it/250x250" class="d-block w-100" alt="..."> -->
                <div class="row">
                    <div class="col-3"><img src="{{asset('img/img1.jpg')}}" alt="asia" class="d-block w-100" ></div>
                    <div class="col-3"><img src="{{asset('img/img2.jpg')}}" alt="asia" class="d-block w-100" ></div>
                    <div class="col-3"><img src="{{asset('img/img3.jpg')}}" alt="asia" class="d-block w-100" ></div>
                    <div class="col-3"><img src="{{asset('img/img4.jpg')}}" alt="asia" class="d-block w-100" ></div>            
                </div><!--.row-->
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-3"><img src="{{asset('img/img5.jpg')}}" alt="asia" class="d-block w-100"></div>
                    <div class="col-3"><img src="{{asset('img/img6.jpg')}}" alt="asia" class="d-block w-100"></div>
                    <div class="col-3"><img src="{{asset('img/img7.jpg')}}" alt="asia" class="d-block w-100"></div> 
                    <div class="col-3"><img src="{{asset('img/img8.jpg')}}" alt="asia" class="d-block w-100"></div>            
                </div><!--.row-->
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-3"><img src="{{asset('img/img9.jpg')}}" alt="asia" class="d-block w-100"></div>
                    <div class="col-3"><img src="{{asset('img/img10.jpg')}}" alt="asia" class="d-block w-100"></div>
                    <div class="col-3"><img src="{{asset('img/img11.jpg')}}" alt="asia" class="d-block w-100"></div> 
                    <div class="col-3"><img src="{{asset('img/img12.jpg')}}" alt="asia" class="d-block w-100"></div>            
                </div><!--.row-->
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <h1></br>ESTRENOS</h1> 
    <div class="contenedor-movies">
        <div class="container">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img src="http://placehold.it/250x250" class="d-block w-100" alt="..."> -->
                    <div class="row">
                        <div class="col-3"><img src="{{asset('img/img2-1.jpg')}}" alt="asia" class="d-block w-100" ></div>
                        <div class="col-3"><img src="{{asset('img/img2-2.jpg')}}" alt="asia" class="d-block w-100" ></div>
                        <div class="col-3"><img src="{{asset('img/img2-3.jpg')}}" alt="asia" class="d-block w-100" ></div>
                        <div class="col-3"><img src="{{asset('img/img2-4.jpg')}}" alt="asia" class="d-block w-100" ></div>            
                    </div><!--.row-->
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-3"><img src="{{asset('img/img2-5.jpg')}}" alt="asia" class="d-block w-100"></div>
                        <div class="col-3"><img src="{{asset('img/img2-6.jpg')}}" alt="asia" class="d-block w-100"></div>
                        <div class="col-3"><img src="{{asset('img/img2-7.jpg')}}" alt="asia" class="d-block w-100"></div> 
                        <div class="col-3"><img src="{{asset('img/img2-8.jpg')}}" alt="asia" class="d-block w-100"></div>            
                    </div><!--.row-->
                </div>
                <div class="carousel-item">
                  <div class="row">
                      <div class="col-3"><img src="{{asset('img/img2-9.jpg')}}" alt="asia" class="d-block w-100"></div>
                      <div class="col-3"><img src="{{asset('img/img2-10.jpg')}}" alt="asia" class="d-block w-100"></div>
                      <div class="col-3"><img src="{{asset('img/img2-11.jpg')}}" alt="asia" class="d-block w-100"></div> 
                      <div class="col-3"><img src="{{asset('img/img2-12.jpg')}}" alt="asia" class="d-block w-100"></div>            
                  </div><!--.row-->
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <h1></br>POPULARES</h1>
    <div class="contenedor-movies">
      <div class="container">
          <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
              <div class="carousel-item active">
                  <!-- <img src="http://placehold.it/250x250" class="d-block w-100" alt="..."> -->
                  <div class="row">
                      <div class="col-3"><img src="{{asset('img/img1.jpg')}}" alt="asia" class="d-block w-100" ></div>
                      <div class="col-3"><img src="{{asset('img/img2.jpg')}}" alt="asia" class="d-block w-100" ></div>
                      <div class="col-3"><img src="{{asset('img/img2-1.jpg')}}" alt="asia" class="d-block w-100" ></div>
                      <div class="col-3"><img src="{{asset('img/img5.jpg')}}" alt="asia" class="d-block w-100" ></div>            
                  </div><!--.row-->
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-3"><img src="{{asset('img/img11.jpg')}}" alt="asia" class="d-block w-100"></div>
                      <div class="col-3"><img src="{{asset('img/img2-8.jpg')}}" alt="asia" class="d-block w-100"></div>
                      <div class="col-3"><img src="{{asset('img/img7.jpg')}}" alt="asia" class="d-block w-100"></div> 
                      <div class="col-3"><img src="{{asset('img/img9.jpg')}}" alt="asia" class="d-block w-100"></div>            
                  </div><!--.row-->
              </div>
              <div class="carousel-item">
                  <div class="row">
                      <div class="col-3"><img src="{{asset('img/img3.jpg')}}" alt="asia" class="d-block w-100"></div>
                      <div class="col-3"><img src="{{asset('img/img6.jpg')}}" alt="asia" class="d-block w-100"></div>
                      <div class="col-3"><img src="{{asset('img/img7.jpg')}}" alt="asia" class="d-block w-100"></div> 
                      <div class="col-3"><img src="{{asset('img/img8.jpg')}}" alt="asia" class="d-block w-100"></div>            
                  </div><!--.row-->
              </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
    </div>
  </main>
        <article>
          <div class="banner">
            <div class="noticias">
              NOTICIAS
            </div>
          </div>
          <div class="contenedor-cards">
              <div class="contenedor-cards-hijo">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/not1.jpeg')}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">¿Cuanto tiempo dura una película en cartelera?</h5>
                        <p class="card-text"> Cuando estrenan en el cine una película que queremos ver, normalmente solemos ir lo más pronto posible a verla. Sin embargo, el resto de ...</p>
                        
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/not2.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">El Festival de Cine de Mar del Plata levanta el telón</h5>
                        <p class="card-text">Al Festival Internacional de Cine de Mar del Plata, como a toda la Argentina, le pasaron cosas. Muchas pero pocas buenas: a las históricas miradas de reojo de ...</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/not3.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">¿Es Marvel cine? La posición de Scorsese divide a Hollywood</h5>
                            <p class="card-text">El rechazo de Martin Scorsese a las películas de Marvel, que tachó como “no cine” ha dividido a Hollywood y a los cinéfilos, provocando ..</p>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </article>
        <footer>
          <div class="footer1">
            <div class="redes">Nuestras Redes</div>
            <div class="iconos">
              <div class="icon-facebook"></div>
              <div class="icon-twitter-squared"></div>
              <div class="icon-gmail"></div>
            </div>
          </div>
          <div class="footer2">
            <div class="info">
              <p>Términos y condiciones</p>
              <p>informacion</p>
            </div>
          </div>
        </footer> 
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/Proyecto.js')}}"></script>
</body>
</html>