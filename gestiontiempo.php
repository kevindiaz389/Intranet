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
  <link rel="stylesheet" href="css/posada.css">
<link href="css/dropdown.css" rel="stylesheet">
  <script src="js/dropdown.js"></script>
  <script src="js/slidermenu.js"></script>




 
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
  #compromiso{align-content: center;

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

  <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="opacity: .9;" id="mainNav">
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





<!----------------------------------------------------------------- Grid column ---------------------------------------------------->

<!----------------------------------------------------------------- Grid column ---------------------------------------------------->




  <!-- Main Content -->
        


 <div class="container">


<div class="col">
          <a class="boton_personalizado" href="capacitacion.php">
            <img id="boton" src="img/boton2.png"></a>
        </div>
<h4 class="text-center">
   &nbsp;&nbsp; GESTIÓN DEL TIEMPO
</h4>
<br><br>



<div class="tz-gallery">



<h6 class="text-center">
   &nbsp;&nbsp; 18 MARZO 2020
</h6><br>
<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/31.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/31.jpg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
        <a class="lightbox" href="img/galeria/gestiontiempo/32.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/32.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/33.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/33.jpg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/34.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/34.jpg" class="img-fluid">
        </a></figure>

    </div>

<!------------------------------------------------------------------------------------------------------->

<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/36.jpg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/36.jpg" class="img-fluid">
        </a></figure>

    </div>

<!------------------------------------------------------------------------------------------------------->
<br>
<br>
<br>
<h6 class="text-center">
   &nbsp;&nbsp; 4 FEBRERO 2020
</h6><br>

<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/1.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/1.jpeg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
        <a class="lightbox" href="img/galeria/gestiontiempo/26.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/26.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/3.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/3.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/4.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/4.jpeg" class="img-fluid">
        </a></figure>

    </div>

<!------------------------------------------------------------------------------------------------------->

<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/5.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/5.jpeg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
        <a class="lightbox" href="img/galeria/gestiontiempo/6.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/6.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/7.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/7.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/29.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/29.jpeg" class="img-fluid">
        </a></figure>

    </div>

<!------------------------------------------------------------------------------------------------------->

<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/9.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/9.jpeg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
        <a class="lightbox" href="img/galeria/gestiontiempo/10.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/10.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/11.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/11.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/12.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/12.jpeg" class="img-fluid">
        </a></figure>

    </div>

<!------------------------------------------------------------------------------------------------------->

<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/13.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/13.jpeg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
        <a class="lightbox" href="img/galeria/gestiontiempo/14.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/14.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/15.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/15.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/16.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/16.jpeg" class="img-fluid">
        </a></figure>

    </div>

<!------------------------------------------------------------------------------------------------------->

<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/17.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/17.jpeg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
        <a class="lightbox" href="img/galeria/gestiontiempo/18.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/18.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/19.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/19.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/20.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/20.jpeg" class="img-fluid">
        </a></figure>

    </div>

<!------------------------------------------------------------------------------------------------------->

<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/21.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/21.jpeg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
        <a class="lightbox" href="img/galeria/gestiontiempo/22.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/22.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/1.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/1.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/24.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/24.jpeg" class="img-fluid">
        </a></figure>

    </div>

<!------------------------------------------------------------------------------------------------------->

<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/28.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/28.jpeg" class="img-fluid">
        </a></figure>
        <figure class="col-3">
        <a class="lightbox" href="img/galeria/gestiontiempo/25.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/25.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/3.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/3.jpeg" class="img-fluid">
        </a></figure>
      <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/27.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/27.jpeg" class="img-fluid">
        </a></figure>

    </div>

<!------------------------------------------------------------------------------------------------------->

<div class="row">
                <figure class="col-3">
       <a class="lightbox" href="img/galeria/gestiontiempo/8.jpeg" data-size="1600x1067">
          <img alt="picture" src="img/galeria/gestiontiempo/8.jpeg" class="img-fluid">
        </a></figure>
        
    </div>

<!------------------------------------------------------------------------------------------------------->

   
<br>
<br>
<br>

<!--
<div class="row">
  <div class=" col embed-responsive embed-responsive-21by9">
            <iframe src="img/vid02.mp4"></iframe>
          </div>
  </div>

  <div class="row">
  <div class=" col embed-responsive embed-responsive-21by9">
            <iframe src="img/vid02.mp4"></iframe>
          </div>
    </div>
-->

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