<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Stylish Portfolio - Start Bootstrap Template</title>
  <link href="vistas/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vistas/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vistas/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link href="vistas/css/stylish-portfolio.min.css" rel="stylesheet">

</head>
<?php

if (isset($_GET["ruta"])) {
    if ($_GET["ruta"] == "inicio") {
        include "modulos/header.php";
        include "modulos/".$_GET["ruta"].".php";
    } else {
       include "modulos/404.php"; // PARA AGREGAR UN ERROR 404 SI LA RUTA NO ES LA QUE SE INDICA ARRIBA
    }
    include "modulos/footer.php";
} else { //Si no existe la ruta, incluye directamente la esctructura de la web en la pagina de inicio.
    include "modulos/header.php";
    include "modulos/inicio.php";
    include "modulos/footer.php";
}   
  ?>
  <script src="vistas/vendor/jquery/jquery.min.js"></script>
  <script src="vistas/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
  <script src="vistas/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vistas/js/stylish-portfolio.min.js"></script>
</body>
</html>
