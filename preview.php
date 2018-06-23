<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
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
	<div class="encabezado"></div>
    <form>
    <div>
		<a onclick="salida()" href="php/logout.php" class="salir" >Salir</a>
	</div>
	</form>
	<form onclick="edit()">
		<div class="nuevo">
			<p>Nuevo</p>
			<p>documento</p>
		</div>
	</form>

	<form onclick="otro()">
		<div class="reciente">
			<p>Ultimo</p>
			<p>documento</p>
			<p>subido</p>
		</div>
	</form>

	<form>
		<div class="otro">
			<p>Recuperar</p>
			<p>archivo</p>
		</div>
	</form>

</body>
</html>