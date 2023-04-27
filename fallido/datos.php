<?php
require "conexion.php";

$maximo=$_POST['maximo'];
$minimo=$_POST['minimo'];

$insertar=" INSERT INTO maximominimo VALUES('','$maximo', '$minimo')";
$query= mysqli_query($conexion, $insertar);

if($query){
    echo "<script> alert('datos guardados');
    location.href = 'datos.html';
   </script>";
    
}else{
    
    echo "<script> alert('No guardaron los datos');
    location.href = 'maximoMinimo.html';
    </script>";
}


?>