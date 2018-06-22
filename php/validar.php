<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$mysqli=new mysqli('localhost','root','','prueba');

$consulta="SELECT * FROM prueba WHERE usuario='$usuario' and clave='$clave";

$resultado=mysql_query($mysqli, $consulta);

$filas=mysql_num_rows($resultado);

if($filas>0){
	header("location:../preview.html");
}else{
	echo "No se puede acceder";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
