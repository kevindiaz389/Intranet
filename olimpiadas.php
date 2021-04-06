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

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="css/nabvar-general.min.css" rel="stylesheet">

<link href="css/dropdown.css" rel="stylesheet">
  <script src="js/dropdown.js"></script>
  <script src="js/slidermenu.js"></script>


 
  <style>
    .content {
      margin-top: 80px;
    }
      header{
      height: 70px;
    }
    body{
      background-color: #FFFBF1;
      background-position: center;
      background-repeat: no-repeat;

    }
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
  #fondo{
   background-color: #DDDDDD;
  background-position: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other on smaller screens (600px wide or less) */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
  </style>
</head>





<body id="fondo">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
<div class="container-fluid">

<a class="navbar-brand" href="http://gaceta.sicasa.com.mx/">SICASA</a>
<div class="collapse navbar-collapse" id="navbarResponsive">
    
    <ul class="navbar-nav ml-auto">
    
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Gaceta</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">     
        <li class="dropdown-item"><a href="efemerides.php">Efemérides</a></li>
        <li class="dropdown-item"><a href="cumplemes.php">Cumpleañeros</a></li>
        <li class="dropdown-item"><a href="nuevoingreso.php">Nuevo Ingreso</a></li>
        <li class="dropdown-item"><a href="proveedormes.php">Proveedor del mes</a></li>
      </ul>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Informacion General</a>

      <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
        <li class="dropdown-item"><a href="directorio.php">Directorio</a></li>
        <li class="dropdown-submenu">
      <a class="dropdown-item" tabindex="-1" href="#">Convenios</a>
      <ul class="dropdown-menu">
          <li class="dropdown-item"><a href="opticavision.php">Optica Vision Look</a></li>
      </ul>
        </li>
            
          <li class="dropdown-item"><a href="temainteres.php">Temas de Interés</a></li>
          <li class="dropdown-item"><a href="materialreferencia.php">Material de Referencia</a></li>
      </ul>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Empresa</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">     
    
    <li class="dropdown-submenu"><a  class="dropdown-item" tabindex="-1" href="#">Cultura</a>
      <ul class="dropdown-menu">
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


  <header class="masthead" style="background-image: url('img/navbar.jpg')" id="fondocabecera">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">   
        </div>
      </div>
    </div>
  </header>







  <!-- Main Content -->

<p class="text-center" id="titulo"> OLIMIPIADAS ANIVERSARIO SICASA </p>


 <div class="container">
    
    <div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0075.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0077.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0079.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0081.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->
<div class="tz-gallery">
<div class="row-center">
  <div class="col-3">
                <a class="lightbox" href="img/galeria/olimpiadasaniv/DSC_0075.jpg" data-size="1600x1067">
                    <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0075.jpg" class="img-fluid">
                </a>
            </div>
            <div class="col-3">
                <a class="lightbox" href="img/galeria/rosca/DSC_0558.jpg" data-size="1600x1067">
                    <img src="img/galeria/rosca/DSC_0558.jpg" alt="Bridge" class="img-fluid">
                </a>
            </div>
</div>
</div>
<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0082.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0085.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0089.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0091.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0092.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0093.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0094.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0095.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0096.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0099.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0102.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0105.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0108.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0113.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0114.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0116.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0117.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0118.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0119.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0120.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0124.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0129.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0130.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0131.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0132.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0134.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0135.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0152.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0153.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0157.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0160.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0161.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0162.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0163.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0164.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0165.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0166.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0169.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0171.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0172.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0173.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0174.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0175.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0176.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0177.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0178.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0180.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0183.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0184.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0186.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0187.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0189.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------------------------------------------------------------------->

<div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0190.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0192.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0193.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/olimpiadasaniv/DSC_0195.jpg" class="img-fluid">
        </a></figure>
    </div>

    <!------------------------------------------TERMINA OLIMPIADA--------------------------------------------->

    

    <div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0197.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0198.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0199.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0200.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

    <div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0197.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0198.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0199.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0200.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

    <div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0201.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0202.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0203.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0204.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

    <div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0205.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0206.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0216.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0222.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

    <div class="row">
      <figure class="col-3">
        <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0224.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0225.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a href="#" data-size="1600x1067">
          <img alt="picture" src="img/galeria/aniversario/DSC_0233.jpg" class="img-fluid">
        </a></figure>
    </div>





</div>



  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
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
              <a href="https://www.facebook.com/sicasaoficial/">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            
          </ul>
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
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
<?php
}
?>