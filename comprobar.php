<?php
session_start();


$max=$_SESSION['max'];
$min=$_SESSION['min'];

$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];

$_SESSION['nombre2']=$nombre;
$_SESSION['edad2']=$edad;
$_SESSION['genero2']=$genero;

if($edad<=($max) && $edad>=($min)){
    
        
    print "<script>window.location='credencial.php'</script>";
}

else{
    print "<script>window.location='denegado.php'</script>";
}



?>