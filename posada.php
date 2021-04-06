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







  <!-- Main Content -->


<div class="container">
  <div class="col">
          <a class="boton_personalizado" href="eventos.php">
            <img id="boton" src="img/boton2.png"></a>
        </div>
<h4 class="text-center">
   &nbsp;&nbsp; POSADA SICASA
</h4>


  <div class="tz-gallery">
    

    <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0344.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0344.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0346.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0346.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0347.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0347.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0348.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0348.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

        <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0349.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0349.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0352.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0352.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0354.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0354.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_00356jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0356.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0358.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0358.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0359.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0359.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0361.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0361.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0363.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0363.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0365.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0365.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0366.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0366.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0367.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0367.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0368.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0368.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0369.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0369.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0370.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0370.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0372.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0372.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0373.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0373.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0376.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0376.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0377.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0377.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0378.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0378.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0379.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0379.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0380.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0380.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0382.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0382.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0385.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0385.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0386.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0386.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0387.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0387.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0388.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0388.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0389.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0389.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0390.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0390.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0391.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0391.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0392.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0392.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0393.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0393.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0394.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0394.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0395.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0395.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0396.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0396.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0397.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0397.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0398.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0398.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0399.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0399.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0400.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0400.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0401.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0401.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0402.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0402.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0403.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0403.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0404.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0404.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0405.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0405.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0406.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0406.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0407.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0407.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0408.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0408.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0409.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0409.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0410.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0410.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0411.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0411.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0412.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0412.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0413.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0413.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0414.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0414.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0415.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0415.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0416.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0416.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0420.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0420.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0421.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0421.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0422.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0422.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0423.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0423.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0424.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0424.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0425.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0425.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0426.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0426.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0427.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0427.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0428.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0428.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0429.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0429.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0430.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0430.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0431.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0431.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0435.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0435.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0437.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0437.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0438.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0438.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0440.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0440.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0441.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0441.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0442.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0442.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0443.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0443.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0444.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0444.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0446.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0446.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0447.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0447.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0448.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0448.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0449.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0449.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0451.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0451.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0452.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0452.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0453.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0453.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0456.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0456.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0457.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0457.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0460.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0460.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0462.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0462.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0463.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0463.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0464.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0464.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0465.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0465.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0466.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0466.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0467.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0467.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0468.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0468.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0469.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0469.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0470.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0470.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0471.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0471.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0472.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0472.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0473.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0473.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0474.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0474.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0475.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0475.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0476.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0476.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0478.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0478.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0479.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0479.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0480.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0480.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0481.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0481.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0482.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0482.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0483.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0483.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0484.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0484.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0487.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0487.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0488.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0488.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0489.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0489.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0490.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0490.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0491.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0491.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0492.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0492.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0493.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0493.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0494.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0494.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0495.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0495.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0496.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0496.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0497.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0497.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0498.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0498.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0499.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0499.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0500.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0500.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0501.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0501.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0502.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0502.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0503.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0503.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0510.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0510.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0512.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0512.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0513.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0513.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0518.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0518.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
       <a class="lightbox" href="img/galeria/posada/DSC_0519.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0519.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->

          <div class="row">
      <figure class="col-3">
        <a class="lightbox" href="img/galeria/posada/DSC_0520.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/posada/DSC_0520.jpg" class="img-fluid">
        </a></figure>
    </div>

<!------------------------------------------------------------------------------------------------------->







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
    baguetteBox.run('.tz-gallery');
</script>
<!--bloquear click derecho-->
 <script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>
</body>
</html>
<?php
}
?>