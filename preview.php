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
			<p>NUEVO</p>
			<p>DOCUMENTO</p>
		</div>
	</form>

	<form onclick="otro()">
		<div class="reciente">
			<p>RECUPERAR</p>
			<p>DOCUMENTO</p>
		</div>
	</form>

	<form>
		<div class="otro">
			<p>MIS</p>
			<p>ARCHIVOS</p>
		</div>
	</form>

	<form>
		<div class="batman">
			<p>ARCHIVOS</p>
			<p>COMPARTIDOS</p>
		</div>
	</form>

</body>
</html>