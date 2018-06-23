<?php
$js = "<script type=\"text/javascript\" src=\"js/jquery-3.1.1.js\"></script><script type=\"text/javascript\" src=\"js/main.js\"></script>";
$usuario=$_POST['usernameLogin'];
$clave=$_POST['passwordLogin'];
if($usuario!="" && $clave!=""){
if(!empty($_POST)){
	if(isset($usuario) &&isset($clave)){
		if($_POST["usernameLogin"]!=""&&$_POST["passwordLogin"]!=""){
			require("conexion.php");
		  $con = conexion();

			$user_id=null;
			$sql1= "select * from usuarios where (username='{$usuario}') and password='{$clave}' ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["idUser"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../preview.php';</script>";
			}
		}
	}
}
}else{
	print "<script>alert(\"Campos vacios\");window.location='../index.php'</script>";
}

?>
