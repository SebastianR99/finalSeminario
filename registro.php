<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "registro";

$con = mysqli_connect($host,$user,$pass,$db) or die("problemas de conexion");
mysqli_select_db($con,$db) or ("problemas con la base de datos");
 

$nombre=$_POST['correo'];
$correo=$_POST['form-input'];
$repetir=$_POST['form-input'];
$sql="INSERT INTO datos VALUES('$nombre',
                                '$correo',
                                '$repetir')";


$ejecutar=mysqli_query($con,$sql);
if(!$ejecutar){
  echo"hubo un problema";

}else{
  echo"datos guardados con exito<br><a href = 'index.html'>volver</a>";
}
?>