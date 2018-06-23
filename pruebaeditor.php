<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/est2.css">
<script type="text/javascript" src="js/mini.js"></script>
<!-- <script type="text/javascript" src="js/main.js"></script> -->
<title>editor</title>

</head>
<body onload="load()">


<form id="form1" class="form1" name="form1" method="post" action="">
  <div class="iconos">
  <input type="button" title="Negritas" class="botones a1" name="Submit1"  onclick="formato('bold')" />
  <input type="button" title="Cursiva" class="botones a2" name="Submit2" onclick="formato('italic')" />
  <input type="button" title="Subrayado" class="botones a3" name="Submit3"  onclick="formato('underline')" />
  <select title="Cambiar tamaño de letra" class="botones" id="font" onchange="fontSize()">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4" selected="">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
				</select>
  <input type="button" title="Quitar Formato" class="botones a4" name="Submit4" onclick="formato('RemoveFormat')" />
  <input type="button" title="Insertar Imagen" class="botones a7" name="Submit6" onclick="insertarImagen()" />
  <input type="button" title="Cambiar color de letra (Azul)" class="botones a5" name="Submit5" onclick="color('#0000E6')" />
  <input type="button" title="Cambiar color de letra (rojo)" class="botones a8" name="Submit7" onclick="color('#DF0000')" />
  <input type="button" title="Cambiar color de fondo (azul)" class="botones a6" name="Submit9" onclick="colorFondo('#0000E6')" />
  <input type="button" title="Cambiar color de fondo (rojo)" class="botones a9" name="Submit8" onclick="colorFondo('#DF0000')" />
  <input type="button" title="Deshacer acción" class="botones a10" name="Submit10" onclick="formato('undo')" />
  <input type="button" title="Rehacer acción" class="botones a11" name="Submit11" onclick="formato('redo')" />
  <input type="button" title="Descargar Archivo" class="botones a12" name="Submit12" onclick="descargar()" />
  <input type="button" title="Guardar Archivo" class="botones a13" name="Submit13" onclick="guardar()" />
  <input type="button" title="Eliminar archivo" class="botones a14" name="Submit13" onclick="eliminar()" />
  </div>



</form>

<form>
  <iframe class="edit" id="editar"></iframe>
</form>
<form>
  <div id="ht" style="position: absolute; width: 100%; top: 100px; height: 550px; border:1px solid #000; background: #E0ECF8; display:none;max-width: 1490px; left:20px"></div>
</form>


    <div class="encabezado">
      <h3 class= "user"></h3>
    </div>
    <div class="encabezado">
      <p id="docName"></p>
      <a onclick="salida()" href="php/logout.php" class="salir" >Salir</a>
      <a onclick="inicio()" href="preview.php" class="salir" >Inicio</a>
    </div>
</body>
</html>
