<?php
session_start();

if(isset($_SESSION['username'])){
  header("location: inicio.php");
}
else{
  ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="index.css" type="text/css">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
<br>
    <!-- Icon -->
    <div class="fadeIn first">
      <a href="https://www.sicasa.com.mx"><img src="logo 2.jpg" id="icon" alt="User Icon"/></a>
    </div>

    <!-- Login Form -->
    <form action="loguear.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Ingrese su Usuario">
      <input type="password" id="password" class="fadeIn third" name="contraseña" placeholder="Ingrese su Password">
      <input type="submit" class="fadeIn fourth" value="Ingresar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      Si olvidaste tu password, favor de contactar al departamento de TI
    </div>

  </div>
</div>


<?php
}
?>


