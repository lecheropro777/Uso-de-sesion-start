<?php
require "conexion.php";
$sql="SELECT maximo FROM maximominimo";
$sqlmin="SELECT minimo FROM maximominimo";

$ver= mysqli_query($conexion, $sql);
$maximo=mysqli_fetch_array($ver);

$minimo=mysqli_query($conexion, $sqlmin);

$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];

if($edad>=$maximo){
    print "<script>window.location='credencial.php'</script>";
}
else{
    print "<script>window.location='denegado.php'</script>";
}



?>