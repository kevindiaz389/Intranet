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
h5{
  opacity: 0.8;
  font-size: 24px;
  font-style: italic;
  letter-spacing: 3px;
  word-spacing: 5px;
  color: #1E599E;


}
p{

  opacity: none;
  font-size: 22px;
  font-style: none;
  letter-spacing: none;
  word-spacing: none;
  font-family: "Comic Sans MS";

}
h4{
  opacity: 0.7;
  font-size: 30px;
  font-style: none;
  letter-spacing: 3px;
  word-spacing: 5px;
}
  #asterisco{
    color: red;
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






  <body>
  <!-- Main Content -->
 <div class="container">


  <h4 class="text-center"> GALERIA DE INTEGRACIÓN SICASA </h4>
  <br><br>

    <div class="row">

      <figure class="col-4">
        <a href="muraladministracion.php" data-size="1600x1067">
          <img alt="picture" src="img/galeria/muraladmon/2.jpg" class="img-fluid">
        </a>
          
      </figure>
      <div class="col-8">
        <h5>Mural Marzo </h5>
        <p>Los compañeros del departamento de administración ilustrando el mural del mes de Marzo.
</p></div>
</div><br>


    <div class="row">

      <figure class="col-4">
        <a href="carrera5k.php" data-size="1600x1067">
          <img alt="picture" src="img/galeria/carrera/IMG_20200223_083946.jpg" class="img-fluid">
        </a>
          
      </figure>
      <div class="col-8">
        <h5>Carrera 5K</h5>
        <p>El domingo 20 de febrero se realizó una Carrera de 5 kilometros con la finalidad de apoyar a los Bomberos de Cancún.<br><br>
          El equipo SICASA participando en el evento de integración.
</p></div>
</div><br>



<div class="row">

      <figure class="col-4">
       <a href="equipofutbol.php" data-size="1600x1067">
          <img alt="picture" src="img/galeria/futbol/DSC_0241.jpg" class="img-fluid">
       </a>
     </figure>
     <div class="col-8">
     <h5>Equipo Futbol</h5>
     <p>Entrega de uniformes del equipo de futbol FC SICASA.<br>
      Apoyando la iniciativa de integrar a los colaboradores.
</p></div>
</div><br>



<div class="row">

      <figure class="col-4">
       <a href="lentesoptica.php" data-size="1600x1067">
          <img alt="picture" src="img/galeria/optica/2.jpg" class="img-fluid">
       </a>
     </figure>
     <div class="col-8">
     <h5>Labor Social</h5>
     <p>Agradecemos la visita de Ópticas Visión Look, en la cual se llevó a cabo un examen de la vista en las instalaciones de SICASA.<br><br>
      Con el esfuerzo del equipo de SICASA se logró adquirir unos lentes para las compañeras Victoriana Pech y Yolanda Domínguez.
</p></div>
</div><br>



<div class="row">

      <figure class="col-4">
       <a href="cumplefestejado.php" data-size="1600x1067">
          <img alt="picture" src="img/galeria/cumplefestejados/1.jpg" class="img-fluid">
       </a>
     </figure>
     <div class="col-8">
     <h5>Cumpleañeros Festejados</h5>
     <p>Un recuerdo de nuestros compañeros festejados.
</p></div>
</div><br>


<div class="row">

      <figure class="col-4">
       <a href="sanvalentin.php" data-size="1600x1067">
          <img alt="picture" src="img/galeria/sanvalentin/sanvalentin.jpg" class="img-fluid">
       </a>
     </figure>
     <div class="col-8">
     <h5>Día de San Valentín</h5>
     <p>Los colaboradores de SICASA festejaron el día del amor y amistad, a través de una dinámica de post its en los 
      que plasmaron pensamientos positivos y las mejores cualidades de cada uno de sus compañeros.
</p></div>
</div><br>



<div class="row">

      <figure class="col-4">
       <a href="recorridocds.php" data-size="1600x1067">
          <img alt="picture" src="img/galeria/recorridocds/7.jpg" class="img-fluid">
       </a>
     </figure>
     <div class="col-8">
     <h5>Un día de trabajo</h5>
     <p>Estos son los recorridos en las diferentes áreas de SICASA.
</p></div>
</div><br>



<div class="row">

      <figure class="col-4">
       <a href="yoga.php" data-size="1600x1067">
          <img alt="picture" src="img/galeria/yoga/3.jpg" class="img-fluid">
       </a>
     </figure>
     <div class="col-8">
     <h5>Clase de yoga</h5>
     <p>El dia 4 de marzo se impartió una clase de yoga a los colaboradores del Grupo SICASA se dividió en dos clases con el fín de que todos participaran.
</p></div>
</div><br>


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

  <!--bloquear click derecho-->
 <script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>
</body>
</html>

<?php
}
?>