<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: index.php");
}else{
?>

<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sicasa</title>
  <!-- Inicia llamando librerias -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link href = "https://fonts.googleapis.com/css?family= Lato & display = swap" rel = "stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <link rel="stylesheet" href="gallery-grid.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mainnabvar.css" rel="stylesheet">
  <link href="css/dropdown.css" rel="stylesheet">
  <link href="css/sidebar.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/general.css" rel="stylesheet">
  <link href="css/efemerides.css" rel="stylesheet">
  <script src="js/slidermenu.js"></script>
  <script src="js/dropdown.js"></script>
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/clean-blog.min.js"></script>
   <!-- Termina llamando librerias -->

 
	<style>
    #fondo{
 background-color: #DDDDDD;
  background-position: center;
}
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
form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  position: none;
  top: 50px;
  width: 100%;
  padding-top: 50px;
}
		.content {
			margin-top: 80px;
		}
		body::after{
			background-size: 50px 60px;
			background-repeat: no-repeat;
			background-position: center;
		  opacity: .5;
		}
		header{
		  height: 70px;
		}	
    th{
      background-color: #1E599E;
      color: white;
    }
    tr{
      background-color: white;
    }
    #cuerpodirectorio{
      align-content: center;
    }
    td{
  opacity: none;
  font-size: 15px;
  font-style: none;
  letter-spacing: none;
  word-spacing: none;
}
h5{
  opacity: 0.8;
  font-size: 18px;
  font-style: italic;
  letter-spacing: 3px;
  word-spacing: 5px;
}
h4{
  opacity: 0.7;
  font-size: 30px;
  font-style: none;
  letter-spacing: 3px;
  word-spacing: 5px;
}
p{

  opacity: none;
  font-size: 16px;
  font-style: none;
  letter-spacing: 3px;
  word-spacing: 5px;
  font-family: "Tahoma";
}
#opcion1{
  opacity: none;
  font-size: 16px;
  font-style: none;
  font-family: "Arial";
  width: 280px;
  height:28px ;
}
#buscarnombre{
  font-size: 16px;
  font-family: "Arial";
  width: 300px;
  height:28px ;
}
  #asterisco{
    color: red;
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
        <li class="dropdown-item"><a href="efemerides.php">Efem??rides</a></li>
        <li class="dropdown-item"><a href="cumplemes.php">Cumplea??eros</a></li>
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
          <li class="dropdown-item"><a href="temainteres.php">Temas de Inter??s</a></li>
          <li class="dropdown-item"><a href="materialreferencia.php">Material de Referencia</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Empresa</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">     
    <li class="dropdown-submenu"><a  class="dropdown-item" tabindex="-1" href="#">Cultura</a>
      <ul class="dropdown-menu" style="background-color: #EBF9F8">
        <li class="dropdown-item"><a tabindex="-1" href="eventos.php">Eventos</a></li>
        <li class="dropdown-item"><a href="integracion.php">Integraci??n</a></li>
        <li class="dropdown-item"><a href="capacitacion.php">Capacitaci??n</a></li>
        <li class="dropdown-item"><a href="construccion.html">Convocatorias<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Iniciativas<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Clubes<a id="asterisco">*</a></a></li>
      </ul>
    </li>
        <li class="dropdown-item"><a href="politica.php">Pol??ticas</a></li>  
        <li class="dropdown-item"><a href="construccion.html">Vacantes<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Perfil de Puesto<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Historia<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.html">Organizaci??n<a id="asterisco">*</a></a></li>
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


  <body id="fondo">

<?php
////////////////// VARIABLES DE CONSULTA////////////////////////////////////
include('conexion.php');
$where="";

////////////////////// BOTON BUSCAR //////////////////////////////////////

if (isset($_POST['buscar']))
{
  if (empty($_POST['xdepartamento']))
  {
    $where="where nombre like '%".$nombre=$_POST['xnombre']."%'";
  }

  else if (empty($_POST['xnombre']))
  {
    $where="where departamento='".$departamento=$_POST['xdepartamento']."'";
  }

  else
  {
    $where="where nombre like '".$nombre=$_POST['xnombre']."%' and departamento='".$departamento=$_POST['xdepartamento']."'";
  }
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$directorio="SELECT * FROM directorio $where";

$listadepartamento="SELECT DEPARTAMENTO FROM directorio GROUP BY DEPARTAMENTO ORDER BY DEPARTAMENTO ASC";

$resDirectorio=$conexion->query($directorio);

$resDepartamento=$conexion->query($listadepartamento);

if(mysqli_num_rows($resDirectorio)==0)
{
  $mensaje="<h1>No hay registros que coincidan con su criterio de b??squeda.</h1>";
}
?>

<div class="container">


  <h4 class="text-center">DIRECTORIO SICASA</h4>


 
        <section>
      <form method="POST">
        <input id="buscarnombre" type="text" placeholder="NOMBRE..." name="xnombre"/>
        <select id="opcion1" name="xdepartamento">
         <option value="">DEPARTAMENTOS </option>

            <?php

           while ($registroDepartamento = $resDepartamento->fetch_array(MYSQLI_BOTH)){

              echo"<option ".$registroDepartamento['DEPARTAMENTO'].">".$registroDepartamento['DEPARTAMENTO']."</option>";
            }
              ?>
          

        </select>
        <button name="buscar" class="icon" type="submit"><i class="fa fa-search"></i></button>
        
      </form>





<br>
      <table class="table">
        <tr>
          <th>DEPARTAMENTO</th>
          <th>NOMBRE</th>
          <th>EXT</th>
          <th>CEL TRABAJO</th>
          <th>CORREO</th>
        </tr>

        <?php

        while ($registroDirectorio = $resDirectorio->fetch_array(MYSQLI_BOTH))
        {

          echo'<tr>
             <td>'.$registroDirectorio['DEPARTAMENTO'].'</td>
             <td>'.$registroDirectorio['NOMBRE'].'</td>
             <td>'.$registroDirectorio['EXT'].'</td>
             <td>'.$registroDirectorio['CEL TRABAJO'].'</td>
             <td>'.$registroDirectorio['CORREO'].'</td>
             </tr>';
        }
        ?>
      </table>
      <?
        echo $mensaje;
      ?>
    </section>




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