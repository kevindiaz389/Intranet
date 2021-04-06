<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: index.php");
}else{
?>

<!DOCTYPE html>
<html lang="ea">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sicasa</title>


  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <link rel="stylesheet" href="gallery-grid.css">



 <!-- Inicia llamando librerias -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link href = "https://fonts.googleapis.com/css?family= Lato & display = swap" rel = "stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mainnabvar.css" rel="stylesheet">
  <link href="css/dropdown.css" rel="stylesheet">
  <link href="css/sidebar.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/general.css" rel="stylesheet">
  <script src="js/slidermenu.js"></script>
  <script src="js/dropdown.js"></script>
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/clean-blog.min.js"></script>
   <!-- Termina llamando librerias -->




 
  <style>
    
  #counter {
  width: 3.3rem;
  height: 3.3rem;
  border-radius: 50%;
  background: #262731;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin:0px auto;
  color: white;
  padding:3%
}
    .content {
      margin-top: 80px;
    }
      header{
      height: 70px;
    }
   /* body{
      background-color: #FFFBF1;
      background-position: center;
      background-repeat: no-repeat;

    }*/
    img.pequeña{
  width: 335px; height: 350px;
  display:block;
margin:auto;
}
    /* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
#titulo{
  font-family: Arial;
  font-size: 30pt;
}
h4{
  opacity: 0.7;
  font-size: 30px;
  font-style: none;
  letter-spacing: 3px;
  word-spacing: 5px;
  color: black;
}
  #fondo{
   background-color: #DDDDDD;
  background-position: center;
}
  #asterisco{
    color: red;
  }
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #DDDDDD;
    border: none solid black;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: grey;
  }
  #boton{
    width: 4%;
  }

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other on smaller screens (600px wide or less) */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
  </style>
</head>






<!--Inicia Cabecera-->
<!--Inicia nabvar-->
<header>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #EBF9F8" id="mainNav">
<div class="container-fluid">
<a class="navbar-brand" href="http://gaceta.sicasa.com.mx/">SICASA</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Gaceta</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">     
        <li class="dropdown-item"><a href="efemerides.php">Efemérides</a></li>
        <li class="dropdown-item"><a href="cumplemes.php">Cumpleañeros</a></li>
        <li class="dropdown-item"><a href="nuevoingreso.php">Nuevo Ingreso</a></li>
        <li class="dropdown-item"><a href="proveedormes.php">Proveedor del mes</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Informacion General</a>
      <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">
        <li class="dropdown-item"><a href="directorio.php">Directorio</a></li>
        <li class="dropdown-submenu">
      <a class="dropdown-item" tabindex="-1" href="#">Convenios</a>
      <ul class="dropdown-menu" style="background-color: #EBF9F8">
          <li class="dropdown-item"><a href="opticavision.php">Optica Vision Look</a></li>
      </ul>
        </li>      
          <li class="dropdown-item"><a href="temainteres.php">Temas de Interés</a></li>
          <li class="dropdown-item"><a href="materialreferencia.php">Material de Referencia</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Empresa</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">     
    <li class="dropdown-submenu"><a  class="dropdown-item" tabindex="-1" href="#">Cultura</a>
      <ul class="dropdown-menu" style="background-color: #EBF9F8">
        <li class="dropdown-item"><a tabindex="-1" href="eventos.php">Eventos</a></li>
        <li class="dropdown-item"><a href="integracion.php">Integración</a></li>
        <li class="dropdown-item"><a href="capacitacion.php">Capacitación</a></li>
        <li class="dropdown-item"><a href="construccion.html">Convocatorias<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Iniciativas<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Clubes<a id="asterisco">*</a></a></li>
      </ul>
    </li>
        <li class="dropdown-item"><a href="politica.php">Políticas</a></li>  
        <li class="dropdown-item"><a href="construccion.html">Vacantes<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Perfil de Puesto<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Historia<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Organización<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Certificaciones<a id="asterisco">*</a></a></li>
      </ul>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="construccion.html">Buzon de la confianza</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="salir.php">Cerrar Sesion</a>
    </li>
    </ul>
  </div>
</div>
</nav>
  </header>
  
  <!--Termina nabvar-->
  <!--Termina Cabecera-->

<!--Inicia Cuerpo de la pagina--->
<body id="fondo">





<!----------------------------------------------------------------- Grid column ---------------------------------------------------->

<!----------------------------------------------------------------- Grid column ---------------------------------------------------->




  <!-- Main Content -->

 <div class="container">
  <div class="col">
          <a class="boton_personalizado" href="eventos.php">
            <img id="boton" src="img/boton2.png"></a>
        </div>
<h4 class="text-center">
   &nbsp;&nbsp; ANIVERSARIO SICASA
</h4>


<div class="tz-gallery">


<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0075.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0075.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0077.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0077.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0079.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0079.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0081.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0081.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->



<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0082.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0082.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0085.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0085.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0089.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0089.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0091.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0091.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0092.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0092.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0093.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0093.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0094.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0094.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0095.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0095.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0096.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0096.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0099.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0099.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0102.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0102.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0105.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0105.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0108.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0108.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0113.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0113.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0114.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0114.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0116.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0116.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0117.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0117.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0118.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0118.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0119.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0119.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0120.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0120.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0124.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0124.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0129.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0129.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0130.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0130.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0131.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0131.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0132.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0132.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0134.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0134.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0135.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0135.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0152.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0152.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0153.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0153.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0157.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0157.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0160.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0160.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0161.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0161.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0162.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0162.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0163.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0163.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0164.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0164.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0165.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0165.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0166.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0166.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0169.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0169.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0171.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0171.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0172.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0172.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0173.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0173.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0174.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0174.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0175.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0175.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0176.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0176.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0177.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0177.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0178.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0178.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0180.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0180.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0183.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0183.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0184.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0184.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0186.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0186.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0187.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0187.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0189.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0189.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0190.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0190.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0192.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0192.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0193.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0193.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0195.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0195.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------TERMINA OLIMPIADA--------------------------------------------->

    

    <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/aniversario/DSC_0197.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0197.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0198.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0198.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0199.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0199.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0200.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0200.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

    <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/aniversario/DSC_0197.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0197.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0198.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0198.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0199.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0199.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0200.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0200.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

    <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/aniversario/DSC_0201.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0201.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0202.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0202.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0203.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0203.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0204.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0204.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

    <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/aniversario/DSC_0205.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0205.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0206.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0206.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0216.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0216.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0222.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0222.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

    <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/aniversario/DSC_0224.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0224.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0225.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0225.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/aniversario/DSC_0233.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0233.jpg" class="img-fluid">
        </a></figure>
    </div>

</div>




</div>



  <!-- Footer -->
  <footer>
    <hr>
    <div class="container">
      <div class="row">

        <div class="col">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/sicasa_oficial/">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
            <span id="counter">
            <script src="visitas.php"></script>
            </span>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/sicasaoficial/">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <br>
          <p class="copyright text-muted">&copy; Sicasa Cancun 2020</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');</script>

    <!--bloquear click derecho-->
 <script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>
</body>

</html>

<?php
}
?>