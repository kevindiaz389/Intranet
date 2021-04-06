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



  <title>Temas de interés</title>

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-grid.css">

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
    .content {
      margin-top: 80px;
    }
      header{
      height: 70px;
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
  <div class="container" id="fondo">

  <section class="row">
      <h3>PORQUE ESPECIALIZARSE TEMPRANO NO SIEMPRE SIGNIFICA ÉXITO PROFESIONAL</h3>
      <h5>DAVID EPSTEIN - TED</h5>
  </section>
  <br><br>
    

    <section>
      <h4>IZAMAL</h4>
    </section>
  <section class="row contenido">
  <div class="col-4"><br>
    <img src="img/temainteres/tema1.jpg" class="img-fluid">
        </div>
      <div class="col-8">
        <p>Izamal es una hermosa ciudad colonial fundada a mediados del siglo XVI sobre los vestigios de una antigua ciudad maya. A este lugar se le conoce como "Ciudad de los Cerros", rememorando las pirámides cubiertas que se encontraban ahí a la llegada de los españoles, así como "La Ciudad de las Tres Culturas" pues en ella se combinan rasgos de su pasado prehispánico, del período colonial y de la época actual. Actualmente, toda pintada de amarillo y blanco por voluntad de autoridades y vecinos, mantiene una imagen de elegancia y encanto de épocas pasadas que la singularizan y definen con aire señorial en el contexto regional. En sus pulcras calles estampadas, calesas tiradas por caballos llevan al visitante por un recorrido de encanto por sus plazas y parques y sus históricos suburbios. De noche, la ciudad ofrece una experiencia singular, al contemplar una estrellada bóveda celeste recortada por los perfiles de sus pirámides, templos y casonas coloniales; sombras que parecen despertar de un sueño de centurias.</p>
      </div>
  </section>

  <br><hr><br>

  <section>
  <h4>CONVENTO SAN ANTONIO DE PADUA</h4>
    </section>
  <section class="row">
      <div class="col-8">
        <p>Esta es una de las edificaciones más importantes y majestuosas de Mesoamérica, fundada en 1549 por el padre Fray Diego de Landa y los misioneros franciscanos. Está situado en la meseta del cerro mayor de la ciudad. Se sube a él por medio de tres rampas construidas en sus lados libres. La rampa principal es de un solo cuerpo y está rematada en lo alto por una hermosa y sencilla portada que da acceso al atrio, de planta rectangular, con 75 arcos, que ocupa una extensión de terreno de 7,806.43 m2, es decir, poco más de la mitad del total del predio, lo que lo ubica como el atrio cerrado más grande de América y el segundo atrio cerrado más grande del mundo después de la Plaza de San Pedro, en el Vaticano. En el interior del templo se encuentra un bello retablo de estilo barroco, cubierto con baño de oro. Muestra escenas que representan "La Muerte de Jesús", "El Nacimiento", "La visita de la Virgen a Santa Isabel" y "La visitación del ángel a María". En la parte de abajo, hay nichos que dejan observar las imágenes de "Santa Lucía", "San Antonio", "San Francisco" y "San José". En la parte superior, se representa "la Coronación de la Virgen como Reina del Cielo" y abajo, la imagen de la Virgen de la Purísima Concepción, escultura que fue traída por Fray Diego de Landa desde Guatemala, que además cuenta con un sencillo sistema de riel que comunica con el Camarín, espacio donde los fieles creyentes le demuestren su fe y devoción.</p>
      </div> 
      <div class="col-4"><br>
    <img src="img/temainteres/tema2.jpg" class="img-fluid">
        </div>
  </section>

  <br><hr><br>

  <section>
    <h4>CENTRO DE IZAMAL</h4>
    </section>
    <section class="row contenido">
  <div class="col-4"><br>
    <img src="img/temainteres/tema3.jpg" class="img-fluid">
    <br>
    <img src="img/temainteres/tema4.jpg" class="img-fluid">
    <br>
    <img src="img/temainteres/tema5.jpg" class="img-fluid">
        </div>
      <div class="col-8">
        <p>La plaza Zamná, también llamada del mercado, se ubica al norte del Convento, es la más antigua y ahora constituye cuando mucho la quinta parte de la que existía en el periodo anterior. Su importancia llevó a que se edificaran desde muy temprano portales de peregrinos en su costado sur, anexo al Convento, y sobre al oriente un gran arco de acceso sobre el denominado Camino Real que comunica con Mérida. En su esquina noroeste se construyó en el siglo XVII un hospicio con su capilla dedicada al Divino Maestro. Al poniente de dicha plaza fueron construidas doce casas de cal y canto (mampostería ordinaria), en 1730, por el gobernador y capitán general don Antonio de Figueroa y Silva, destinadas a autoridades y visitantes distinguidos, agregándoseles portales de medio punto en 1816. En 1887 parte de los portales del lado oriente funcionaban como mercado de granos. Un rasgo distintivo de la traza lo constituye el hecho de poseer tres plazas aledañas al convento. A la de Zamná, ubicada al norte, se le añaden la hoy denominada Plaza Crescencio Carrillo y Ancora al poniente y la plazuela "2 de Abril" al sur. La primera se ubicaba entre cuatro pirámides y era más pequeña que la ya descrita. Se le denominó Plaza menor o de indios, sin embargo, en su costado poniente se edifican las casas reales que a finales del XVIII fueron reedificadas con arcadas mirando al oriente por don Manuel de Antolín y en 1812 albergarían el primer ayuntamiento, la cárcel pública, el Cuartel de Gendarmes, la Audiencia y Casa Real de los indígenas. Desde el siglo anterior, durante el segundo imperio, se habían edificado al oriente, frente al convento, unos portales trilobulares, mismos que fueron ampliados hacia el norte con otros destinados al mercado público en 1891. Tuvo usos militares ya que desde inicios del siglo XIX se establecieron cuarteles militares aledaños a esta plaza sur y norte del Palacio Municipal. Hacia 1878 fue dividida en dos parques el "5 de mayo" y el "Zaragoza" con una verja, un monumento a los héroes de la guerra de castas y un pasillo central que comunicaba los accesos del convento y palacio municipal. A la plazuela "2 de abril", ubicada al sur del convento, también se le llamaba "plazuela del toro" debido a que ahí se realizaban corridas y peleas de gallos.</p>
      </div>
  </section>

  <br><hr><br>

  <section>
    </section>
    <h4>PIRÁMIDE KINICH KAKMÓ</h4>
  <section class="row">
      <div class="col-8">
        <p>Significa "Guacamaya de Fuego con Rostro Solar". Se interpreta que los mayas creían que el dios Kinich bajaba en el ardor del sol del mediodía, para quemar y por tanto purificar los sacrificios o las ofrendas llevadas al panteón maya, usando para ello la forma de una guacamaya. Es la más grande en superficie de la Península de Yucatán y la tercera de México después de la del Sol en Teotihuacán y Cholula en Puebla.</p>
      </div> 
      <div class="col-4"><br>
    <img src="img/temainteres/tema6.jpg" class="img-fluid">
        </div>
  </section>

  <br><hr><br>

  <section>
    <h4>PIRÁMIDE TU´UI (EL CONEJO)</h4>
    </section>
    <section class="row contenido">
  <div class="col-4"><br>
    <img src="img/temainteres/tema7.jpg" class="img-fluid">
        </div>
      <div class="col-8">
        <p>Fue explorada en 1994, cuando se determinó que constaba de tres etapas constructivas, siendo la más temprana una pequeña plataforma rectangular de 3 metros de altura con muros verticales formados por grandes piedras labradas y esquinas en ángulo recto. En la segunda etapa se cubrió totalmente al edificio anterior y el nuevo basamento tenía dos cuerpos con sus muros en talud. Las dimensiones son de 30 metros de este a oeste, por 39 metros de norte a sur. En el tercer periodo constructivo la plataforma creció. Sus muros presentan un ligero talud y sus esquinas son redondeadas, sin embargo, las piedras son de menor tamaño y presentan un mejor acabado, encontrándose entre escombros algunas de estilo Puuc, por lo que no sería extraño que las construcciones que se encontraban sobre la plataforma superior, de las cuales ya no quedan vestigios, fuesen de ese estilo. Aunque no se sabe con precisión la función que tenía, pudo haber sido el basamento de la habitación de algún importante dignatario de la época maya.</p>
      </div>
  </section>

  <br><hr><br>

  <section>
    <h4>PIRÁMIDE HABUK</h4>
    </section>
  <section class="row">
      <div class="col-8">
        <p>Su nombre significa "Vestido de Agua". Es una estructura formada por una plataforma de 90 metros por un lado y 3.80 metros de altura, sobre la que se encuentra una plaza de 30 metros de largo por 25 metros de ancho, delimitada por cuatro edificios. Su primera etapa constructiva puede fecharse para el Clásico Temprano (250-600 años d.C.), y la segunda, durante el Clásico Terminal (800-1000 d.C.). En cuanto a las filiaciones cerámicas de Izamal, se puede considerar que datan del Preclásico Medio (700-450 a.C.)</p>
      </div> 
      <div class="col-4"><br>
    <img src="img/temainteres/tema8.jpg" class="img-fluid">
        </div>
  </section>

  <br><hr><br>

  <section>
    <h4>PIRÁMIDE ITZAMATÚL</h4>
    </section>
    <section class="row contenido">
  <div class="col-4"><br>
    <img src="img/temainteres/tema9.jpg" class="img-fluid">
        </div>
      <div class="col-8">
        <p>Es la segunda construcción más grande e importante después de Kinich Kakmó. Su nombre significa "el que recibe o posee la gracia del cielo". Era un templo dedicado a Zamná. Tuvo tres periodos constructivos. El primero se caracteriza por ser un edificio de planta casi cuadrada, conformado por cuerpos escalonados con muros de talud, las esquinas están remitidas o redondeadas, típicas de los edificios tempranos, alcanzando una altura de poco más de 20 mts. sobre el nivel de la calle. En el segundo periodo constructivo se realizaron importantes cambios, tanto estructurales como estilísticos, de tal manera que el primer edificio se encuentra cubierto por el segundo, y sus fachadas fueron modificadas totalmente. En la última modificación se le construyó una gran plataforma que cubrió las primeras edificaciones, cuyas dimensiones originales difícilmente se pueden precisar, pero probablemente fueron de aproximadamente 120 metros por lado con una altura promedio de 9 metros. Fue construida entre los años 300 y 600 de nuestra era. Mide 22 metros de altura.</p>
      </div>
  </section>

  <br><hr><br>

  <section>
    <h4>LUZ Y SONIDO "LA LUZ DE LOS MAYAS"</h4>
    </section>
  <section class="row">
      <div class="col-8">
        <p>El espectáculo se presenta en el incomparable escenario del atrio del convento franciscano de San Antonio de Padua. Consiste en proyectar en los arcos, debajo de la espadaña de la Tercera Orden, cuatro ventanas que miran al pasado y presente del esplendor de la cultura maya. Mezcla de manera perfecta un documental histórico relacionado con la presencia, rastros y obras de los mayas, con composiciones musicales diseñadas, sincronizadas y realizadas para este magno evento por músicos intérpretes de la región y con cantos realizados por niños de origen Maya. Es una presentación que conjugando imagen, sonidos y narración transportan al espectador en el tiempo, hacia la pretérita grandeza de los antiguos mayas.</p>
      </div> 
      <div class="col-4"><br>
    <img src="img/temainteres/tema10.png" class="img-fluid">
        </div>
  </section>

  <br><br>

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

</body>
</html>
<?php
}
?>