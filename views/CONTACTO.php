<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <title> CONTACTO </title>
    <meta name="keywords" content="COVID, CONSULTORIO, PARANA, MEDICOS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos.css">
     <link rel="icon" href="../img/icono.ico"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    
  </head>
 <!-- fuente-->
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
<body class="container-fluid no-gutters">
  <!-- INICIO DEL NAVEGADOR -->
<header class="row">
<nav class="col-12">
<a href="../index.html"><img id="img1" src="../img/logo3.png" alt="Logo"> </a>
<br>
<ul class="nav justify-content-center">
 <li class="nav-item">
    <a class="nav-link cool-link" href="STAFF%20PROFESIONAL.html">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link cool-link" href="INFORMACION%20PARA%20PACIENTES.html">INFO PARA PACIENTES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link cool-link" href="NOVEDADES.html">NOVEDADES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link cool-link" href="Nosotros.html">NOSOTROS</a>
     </li>
  <li class="nav-item">
    <a class="nav-link cool-link" href="MISION%20Y%20VISION.html">MISION Y VISION</a>
     </li>
     <li class="nav-item">
      <a class="nav-link cool-link" href="CONTACTO.php">CONTACTO</a>
    </li>
</ul>
</nav>
</header>
<!-- CIERRE del NAVEGADOR -->
<br>
<div class="separacion"></div>
<br>

<!-- INICIO DEL COMENTARIO -->
<h2><p class="text-center">SECRETARIA </p></h2>
  
<div class="contacto container">
<p class="text-center"> <b>Dias:</b> Lunes a Viernes de 10 a 20 hs </p>

<p class="text-center"><b> Telefonos:</b> 343 4075054 / 343 6221170</p>

<p class="text-center"><b> Email:</b> kairosparana@gmail.com </p>

<p class="text-center"><b> Direccion:</b> Pascual Palma 88/ Parana Entre Ríos. CP: 3100</p>
</div>
<!-- CIERRE de Comentarios -->

<!-- INICIO DEL FORMULARIO -->
<section class="container formulario">
  <form action="enviar.php" method="post">
  <input type="text" name="name" id="name" class="name" placeholder="NOMBRE">
                        <input type="text" name="mail" id="mail" class="email" placeholder="CORREO">
                        <input type="text" name="phone" id="subject" class="subject" placeholder="TELÉFONO">
                        <textarea name="message" class="message" placeholder="MENSAJE ... " id="message"></textarea>
                        <div class="clear"></div>
<input type="submit">
</form>
</section>
<?php
include ("enviar.php");
?>
<!-- CIERRE de FORMULARIO -->


<!-- WHATSAPP -->
<div class="w-flotante">
  <a href="https://wa.me/5493436221170" target="_blank" class="text-decoration-none"><span class="d-none">WhatsApp
    </span><img src="../img/whatsapp-logo-1.png" class="whatsapp"></a>
</div>
<!-- CIERRE de WHATSAPP -->

<!-- banner Final -->
<section class="position-sticky">
<div class="final">
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <p class="text-center" ><a class="nav-link" href="../index.html"> KAIROS  Salud y Bienestar</a></p>
     </li>
     </ul>
<p class="text-center">Copyright © 2021.</p> <!-- https://www.facebook.com/ema.taborda -->
</div>
</section>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>

</html>
