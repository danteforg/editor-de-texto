<?php

$v1 = $_POST['username'];
$v2 = $_POST['fullname'];
$v3 = $_POST['email'];
$v4 = $_POST['password'];
$v5 = $_POST['confirm_password'];

if($v1=="" &&$v2=="" &&$v3=="" &&$v4=="" &&$v5==""){
	print "<script>alert(\"Todos los campos estan vacios\");window.location='../index.php';</script>";		
}elseif($v1=="" or$v2=="" or$v3=="" or$v4=="" or$v5==""){
	print "<script>alert(\"Algun campo esta vacio\");window.location='../index.php';</script>";
}elseif($v4 == $v5){
	include "conexion.php";
	$found=false;
	$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
	$query = $con->query($sql1);
	while ($r=$query->fetch_array()) {
		$found=true;
		break;
	}if($found){
		print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../index.php'</script>";
	}
	$sql = "insert into user(username,fullname,email,password,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
	$query = $con->query($sql);
	if($query!=null){
		print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../index.php';</script>";
	}
}else{
	print "<script>alert(\"Contraseñas invalidas\");window.location='../index.php';</script>";
}
?>