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



  <title>Informacion general</title>

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
 <!DOCTYPE html>
<html lang="ea">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">



  <title>Informacion general</title>

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

  <link rel="stylesheet" href="css/galeria.css">



  




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
}
img {
  border-radius: 8px;
}
hr {
  height: 1px;
  background-color: grey;
}
h4{
  opacity: 0.7;
  font-size: 30px;
  font-style: none;
  letter-spacing: 3px;
  word-spacing: 5px;


}

h5{
  opacity: 0.8;
  font-size: 24px;
  font-style: italic;
  letter-spacing: 3px;
  word-spacing: 5px;


}
p{

  opacity: none;
  font-size: 22px;
  font-style: none;
  letter-spacing: none;
  word-spacing: none;
  font-family: "Comic Sans MS";

}
  #asterisco{
    color: red;
  }
#fondo{
  background-image: url("img/galeria/politicas/fondo2.jpg");
  background-position: center;
}
#sobreponer {
  width:130px;
  height:40px;
  position:absolute;
}

.azul {
  background: #C9C9CE;
  width: 30px;
  height: 30px;
  z-index:1; /*El z-index de la caja azul es menor al de la caja roja*/
}
  </style>
</head>









<body  id="fondo">

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


  <!-- Main Content -->
  <div class="container" id="fondopag">


<h4 class="text-center">USO DE CÓMPUTO</h4>
<br><br>
<div class="galeria">

<div id="sobreponer" class="azul"></div>
<iframe src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=fdn0oafmz&amp;t=1586985451" width="100%" height="700px" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>

</div>


  <!------------------------------------------------------------------------------------------------------>


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
  <script>
$(document).ready(function(){
    $('.carousel').carousel({
      interval: 10000
    });
  });
  </script>

 <script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>


</body>

</html>


<?php
}
?>