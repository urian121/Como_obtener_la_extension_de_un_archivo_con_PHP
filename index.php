<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="shortcut icon" href="http://groomersacademy.com.co/wp-content/themes/betheme/images/favicon.ico"/>

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="css/material.min.css" rel="stylesheet">
    <title>Cómo obtener la extensión de cualquier Archivo:: Webdeveloper Urian Viera </title>
  </head>
  <body>

<nav class="navbar navbar-light" style="background-color: #55468c !important;">
  <a class="navbar-brand" href="#">
    <img src="/material/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>
</nav>

<div class="container mt-5"> 

  
  <h3 class="text-center mb-5">
    Cómo obtener la extensión de cualquier <strong>Archivo</strong> 
    <hr>
  </h3>

<?php 
//How to Get File Extension in PHP
//pathinfo: Devuelve información acerca de la ruta de un fichero
//PATHINFO_EXTENSION: devuelde la extension del archivo
  $rutaArchivo = "‪‪archivos/demoWord.word";
  $extension_archivo = pathinfo($rutaArchivo, PATHINFO_EXTENSION);

  echo "La extensión del Archivo es:  ".$extension_archivo;
 ?>
  
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="js/material.min.js"></script>

  </body>
</html>