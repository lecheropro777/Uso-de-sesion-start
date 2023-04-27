<?php
require "conexion.php";
$sql="SELECT maximo FROM maximominimo";
$maximo= mysqli_query($conexion, $sql);

while($ver=mysqli_fetch_array($maximo)){
echo $ver['maximo'];
}

?>