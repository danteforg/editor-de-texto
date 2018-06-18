<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysql_connect("localhost", "root", "", "prueba");
$consulta="SELECT * FROM USUARIOS WHERE usuario='$usuario' and clave='$clave";
$resultado=mysql_query($conexion, $consulta);

$filas=mysql_num_rows($resultado);

if($filas>0){
	header("location:preview.html");
}else{
	echo "No se puede acceder";
}

mysql_free_result($resultado);
mysql_close($conexion);