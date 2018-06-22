<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Estilos.css">
          <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
          <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<div class="encabezado">
		<h3 class= "user">USUARIO</h3>
    </div>
    <form>
    <div>
		<a onclick="salida()" href="php/logout.php" class="salir" >Salir</a>
	</div>
	</form>
	<form>
		<div class="nuevo">
			<p>Nuevo</p>
			<p>documento</p>
		</div>
	</form>

	<form>
		<div class="reciente">
			<p>Nuevo</p>
			<p>documento</p>
		</div>
	</form>

	<form>
		<div class="otro">
			<p>Nuevo</p>
			<p>documento</p>
		</div>
	</form>

	<form>
		<div class="mas">
		</div>
	</form>

</body>
</html>