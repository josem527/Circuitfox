<?php
  include "database.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial -scale=1, maximum-scale=1"/>
  <link rel="shortcut icon" href="image/ZORRO 150.svg" type="image/x-icon">
	<script type="text/javascript" languaje="javascript" src="js/jquery-3.5.1.min.js"></script>
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel=" stylesheet " href=" https://unpkg.com/aos@next/dist/aos.css">
  <!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	 <link rel="stylesheet" href="css/estiloinicio.css">
    
  <!--   <script type="text/javascript" languaje="javascript" src="js/main.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet"><!--fuente CircuitFOX


-->

<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>

<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet'>
<!-- or -->
<link href='https://unpkg.com/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet'>


	<title>CircuitFox</title>
</head>
<body id="index"style="background-image:url(image/fondo3.png);background-size: 100%">


    <nav class="navbar navbar-expand-md navbar-light navbar-dark navbar-default navbar-fixed-top" style="background-color: #3867d6; border-bottom: 1px solid transparent; box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, .5);position: fixed;z-index: 100;
    transition: ease-in-out 0.5s;width: 100%">
  <div class="container">

        <a class="navbar-brand" href="index.html"style="font-family: 'Yesteryear', cursive;font-size:40px;color:white">CircuitFox<img src="image/ZORRO.svg" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">

            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"><i class='bx bx-home-alt' ></i> </i>Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contenido.html"><i class='bx bx-book-alt'></i> </i>Contenidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="herramientas.html"><i class='bx bxs-shapes'></i> Herramientas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bibliografia.html"><i class='bx bxs-bookmark-star'></i> Bibliografía</a>
              </li>
            </ul>
              <style>
              li:hover {
                background-color: #55A5FC; 
                border-radius: 5px
              }
              </style>
            <a class="d-block text-light p-1" href="#coten" >
              <path fill-rule="evenodd" d="M3 13a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-1 0v10a.5.5 0 0 0 .5.5z"/>
              <path  fill-rule="evenodd" d="M5.354 4.854a.5.5 0 0 0 0-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L3 3.207l1.646 1.647a.5.5 0 0 0 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 9a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
            </svg>
            </a>
           
           <!--   <form class="collapse multi-collapse"id="bon" style="background-color: #b2bec3;border-radius: 20px;padding:5px 0">

            <div class="container">                  
                <div class="form-group">
                    <i class='bx bx-user bx-sm' ></i>
                    <input name="email"type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Correo">
                </div>
                <div class="form-group">
                    <i class='bx bx-dots-horizontal-rounded bx-sm'></i>
                    <input name="password"type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Contraseña">
                </div>
      
            <br>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href="registro.html" class="btn btn-primary">Registro</a>
            </form> -->
           
              <ul class="nav navbar-nav navbar-right">
              <a href="registro.php"type="button" class="btn btn-sm" aria-controls=""style="background-color: #2ecc71;color:white">¡ Contáctenos !</a>
                   
            </ul>
            </div>
         
        
          

           </div>
        </div>           
    </nav>

<div class="container">

    <div class="row">
 
<div class="jumbotron" style="margin:0 auto;margin-top: 5%;background-image: url(image/elemen.png);"><br><br><br>
  
  <h1 class="display-4"><b>¡Hola, bienvenido a CircuitFox!</b></h1>
  <p class="lead"><b>Aprende con la plataforma y usala desde tu dispositivo móvil o laptop</b></p>
  <hr class="my-4">

  <a class="btn btn-primary btn-lg" href="https://www.youtube.com/watch?v=j_ckCxVCPao" role="button">¡Conoce más!</a>
</div>
    </div> 
        </div>

         <div class="slider1">
    <div class="slider-contenedor">
      <slide class="contenido-slider">
        <div>
          <h2><b>¡Desarrolla tus habilidades haciendo uso de la plataforma de CircuitFox desde tu laptop o smartphone!</b></h2>
          <a href="#">¡Aprende!</a>
        </div>
        <img src="image/animacion.svg" alt="">
      </slide>
      <slide class="contenido-slider">
        <div>
          <h2><b>Organiza tu tiempo para estudiar desde cualquier espacio de tu hogar o universidad.</b></h2>
          <a href="#">¡Proyectate!</a>
        </div>
        <img src="image/animacion2.svg" alt="">
      </slide>
      <slide class="contenido-slider">
        <div>
          <h2><b>Experimenta mediante las herramientas de simulación que ofrece la plataforma y aprende de una manera práctica.</b></h2>
          <a href="#">¡Practica!</a>
        </div>
        <img src="image/animacion3.svg" alt="">
      </slide>
      <slide class="contenido-slider">
        <div>
          <h2><b>¡Desarrolla tus habilidades haciendo uso de la plataforma de CircuitFox desde tu laptop o smartphone!</b></h2>
          <a href="#">¡Aprende!</a>
        </div>
        <img src="image/animacion.svg" alt="">
      </slide>
    </div>
  </div>

      <script type="text/javascript">

        let slider = document.querySelector(".slider-contenedor")
        let sliderIndividual = document.querySelectorAll(".contenido-slider")
        let contador = 1;
        let width = sliderIndividual[0].clientWidth;
        let intervalo = 5000;

        window.addEventListener("resize", function(){
            width = sliderIndividual[0].clientWidth;
        })
        setInterval(function(){
            slides();
        },intervalo);
  
          function slides(){
            slider.style.transform = "translate("+(-width*contador)+"px)";
            slider.style.transition = "transform .8s";
            contador++;

            if(contador == sliderIndividual.length){
                setTimeout(function(){
                    slider.style.transform = "translate(0px)";
                    slider.style.transition = "transform 0s";
                    contador=1;
                },1500)
            }
        }
        ;
      </script>

<div class="row"style="margin:5% 17.5%">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;margin:0 auto"data-aos="zoom-in">  
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">¡Mide tus habilidades!</h5>
    <p class="card-text">La plataforma contiene una autoevaluación por cada tema donde medirás tu conocimiento de forma inmediata.</p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;margin:0 auto"data-aos="zoom-in">
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">¡Aprende conceptos!</h5>
    <p class="card-text">Los conceptos de los circuitos ayudan a comprender el comportamiento de éstos.</p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 18rem;margin:0 auto"data-aos="zoom-in">
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">¡Experimenta con las herramientas!</h5>
    <p class="card-text">Tenemos tres herramientas que te servirán para analizar los circuitos de una forma más fácil.</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;margin:0 auto"data-aos="zoom-in">
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">¡Simula los circuitos!</h5>
    <p class="card-text">Esta herramienta permite observar el comportamiento de los circuitos de una forma más práctica.</p>


  </div>
</div>
<div class="card text-white bg-warning mb-3" style="max-width: 18rem;margin:0 auto"data-aos="zoom-in">
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">¡Sistemas de ecuaciones!</h5>
    <p class="card-text">Utiliza la herramienta de sistema de ecuaciones simultaneas para hallar los valores de los voltajes o corrientes en el circuito.</p>
  </div>
</div>
<div class="card text-white bg-info mb-3" style="max-width: 18rem;margin:0 auto"data-aos="zoom-in">
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">¡Material audiovisual!</h5>
    <p class="card-text">Permitenos ofrecerte un material audiovisual, donde por medio de vídeos interactivos podrás comprender los temás de una forma más dinámica.</p>
  </div>
</div>

</div>
</div>

<!-- footer -->

<div class="container">
  <div class="row"style="background-color: silver;border-radius: 10px 10px 0 0;padding:5px 0;">
    <div class="col-lg-4">
      <div class="text-center"style="margin:2% auto;border-radius: 5px">
                        <img src="image/logoupn.png" width="70%" class="rounded" alt="Responsive image" style="text-align: center;">
                        </div>

    </div>
    <div class="text-center col-lg-4">
      <p style="margin-top: 5%"><b style="color: #3867d6">Copyright © 2020 CircuitFox. Todos los derechos reservados.</b></p>
    </div>
 <div class="col-lg-4">

      <div class="social-media"style="text-align: center;margin-bottom: 10px">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>

      </div>
    </div>
  </div>
 <script src=" https://unpkg.com/aos@next/dist/aos.js "> </script>
  <script>
    AOS.init();
  </script>
</div>


<button class="fas fa-chevron-up" style="font-size:20px"onclick="topFunction()" id="myBtn" title="Go to top"></button>

  <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<style type="text/css">
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  opacity: 0.8;
  outline: none;
  background-color: #636e72;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="http://proyectojb.000webhostapp.com/vendor/jquery/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
</body>
</html>