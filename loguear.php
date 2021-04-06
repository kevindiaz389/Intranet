<?php
include('conexion.php');
session_start();
error_reporting(0);
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];





$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['username']=$usuario;
    header("location:inicio.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">Contraseña Incorrecta</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
