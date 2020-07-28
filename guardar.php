<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "prueba";

$con = mysqli_connect($host,$user,$pass,$db) or die("problemas de conexion");
mysqli_select_db($con,$db) or ("problemas con la base de datos");
 

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
$sql="INSERT INTO datos VALUES('$nombre',
                                '$correo',
                                '$mensaje')";


$ejecutar=mysqli_query($con,$sql);
if(!$ejecutar){
  echo"hubo un problema";

}else{
  echo"datos guardados con exito<br><a href = 'index.html'>volver</a>";
}
?>