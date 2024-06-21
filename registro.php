<?php
  include "database.php";
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial -scale=1, maximum-scale=1"/>
	<script type="text/javascript" languaje="javascript" src="js/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="shortcut icon" href="image/ZORRO 150.svg" type="image/x-icon">
	 <link rel="stylesheet" href="css/estiloinicio.css">
    <script type="text/javascript" languaje="javascript" src="js/main.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet"><!--fuente CircuitFOX-->

    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>

<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet'>
<!-- or -->
<link href='https://unpkg.com/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet'>


	<title>CircuitFox</title>
</head>
<body id="coten">

 <div style="position: fixed; background-image: url(image/fondo4.png); background-size: 100%; background-repeat: no-repeat; z-index: -1; width: 100%; height: 100%;"></div>

    <nav class="navbar navbar-expand-md navbar-light navbar-dark navbar-default navbar-fixed-top" style="background-color: #3867d6; border-bottom: 1px solid transparent; box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, .5);position: fixed;z-index: 100;
    transition: ease-in-out 0.5s;width: 100%">
<div class="container">
        <a class="navbar-brand" href="index.html"style="font-family: 'Yesteryear', cursive;font-size:40px;color:white">CircuitFox<img src="image/ZORRO.svg" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">

          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><i class='bx bx-home-alt' ></i> </i>Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contenido.html"><i class='bx bx-book-alt'></i> </i>Contenidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="herramientas.html"><i class='bx bxs-shapes'></i> Herramientas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class='bx bxs-bookmark-star'></i> Bibliografía</a>
              </li>
            </ul> 
            <style>
            li:hover {
              background-color: #55A5FC; 
              border-radius: 10px
            }
            </style>      
 <a class="d-block text-light p-1" href="#coten" >
  <path fill-rule="evenodd" d="M3 13a.5.5 0 0 0 .5-.5v-10a.5.5 0 0 0-1 0v10a.5.5 0 0 0 .5.5z"/>
  <path  fill-rule="evenodd" d="M5.354 4.854a.5.5 0 0 0 0-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L3 3.207l1.646 1.647a.5.5 0 0 0 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 9a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
</svg>
</a>
           <!-- <form class="collapse multi-collapse"id="bon" style="background-color: #b2bec3;border-radius: 20px;padding:5px 0">

            <div class="container">                  
                <div class="form-group">
                    <label for="exampleDropdownFormEmail2">Usuario</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword2">Contraseña</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Contraseña">
                </div>
                <div class="form-group">

                    
                </div>
            <br>
            <button type="submit" class="btn btn-primary">Entrar</button>
            </form> -->
                       <ul class="nav navbar-nav navbar-right">
              <a href="registro.php"type="button" class="btn btn-sm" aria-controls=""style="background-color: #2ecc71;color:white">¡ Contáctenos !</a>
                   

            </div>

        
            
           </div> 
        </div>
           
    </nav>

<div class="row">       
   <div class="container">

 
<div class="contenidoss" style="margin:0 auto;margin-top: 5%;padding-bottom: 2%"><br><br><br>

 <h3 class="display-4"style="text-align: center"><b>¡Cuéntanos tu experiencia con CircuitFox!</b></h3>
   <div class="text-center">
    <a class="navbar-brand" style="font-family: 'Yesteryear', cursive;font-size:40px;color:white;"><img src="image/user.png" width=40% class="d-inline-block align-top" alt="" loading="lazy"></a></div>





         <form name="registro" method="post" action="registro.php"><br>
          <?php 
if($_POST['validar']){
  if($_POST['nombre']==null || $_POST['apellido']==null || $_POST['email']==null || $_POST['comentarios']==null || $_POST['telefono']==null){
?>


    <div class="alert alert-danger col-8"style="margin: 0 auto;text-align: center;" role="alert">Estimado usuario:<br>Dejó algún dato sin diligenciar.</div>
<?php }else{ ?>
    <div class="alert alert-success col-8"style="margin: 0 auto;text-align: center;" role="alert">Estimado usuario:<br>¡Tus datos fueron registrados satisfactoriamente!</div>
    <?php
    registro($_POST['nombre'],  $_POST['apellido'], $_POST['email'], $_POST['telefono'], $_POST['comentarios']);
     } ?>      


<?php }else{ ?>
           <div class="alert alert-danger col-8"style="margin: 0 auto;text-align: center;" role="alert">Recuerde:<br> Cuando acepta los terminos de registro de datos usted está aceptando los permisos a la recoleccion y uso de su información personal.</div>
<?php } ?><br><br>
           <div class="form-group"style="text-align: center">
            
             <input  style="text-align: center;margin:0 auto"name="nombre"type="text" class="form-control col-8" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Nombres">
             <small id="emailHelp" class="form-text text-muted">Utilice mayúscula en la primera letra y sin tíldes.</small>
           </div>
           <div class="form-group"style="text-align: center">
            
             <input  style="text-align: center;margin:0 auto"name="apellido"type="text" class="form-control col-8" id="exampleInputPassword1"placeholder="Apellidos">
             <small id="emailHelp" class="form-text text-muted">Utilice mayúscula en la primera letra y sin tíldes.</small>
          </div>
           <div class="form-group"style="text-align: center">
           
             <input style="text-align: center;margin:0 auto" name="email"type="text" class="form-control col-8" id="exampleInputPassword1"placeholder="Correo electrónico">
             <small id="emailHelp" class="form-text text-muted">En minúsculas y sin tíldes.</small>
           </div>
          
           <div class="form-group"style="text-align: center">
            
             <input style="text-align: center;margin:0 auto"name="telefono" type="cel" class="form-control col-8" id="exampleInputPassword1"placeholder="Numero de teléfono">
             <small id="emailHelp" class="form-text text-muted"></small>
           </div><br>
            <div class="form-group"style="text-align: center">
             <label for="exampleInputPassword1">Sugerencias o comentarios</label>
             <textarea style=";margin:0 auto"name="comentarios" class="form-control col-8" rows="auto" cols="20"></textarea>
             <small id="emailHelp" class="form-text text-muted">Escriba sin tíldes.</small>
           </div>
           <div class="form-group form-check"style="text-align: center">
             <input type="checkbox" class="form-check-input" name="validar" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Confirmar y aceptar</label><br>

   
<br>


           <button type="submit" name="espichame" class="btn btn-primary">Registrar</button>
           </div>


          
         </form>











</div>
</div>
</div>




</div>
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





	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>