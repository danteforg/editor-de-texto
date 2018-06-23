<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
?>
<html>
<head>
  <title>Editor</title>
      <script src="plugin/tinymce/tinymce.min.js"></script>
      <script type="text/javascript"  src="plugin/tinymce/tinymce.min.js"></script>
      <script type="text/javascript"  src="js/jquery.min.js"></script>
      <script type="text/javascript"  src="plugin/tinymce/init-tinymce.js"></script>
      <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
      <script type="text/javascript" src="js/tinymce.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/Estilos.css">
</head>
<body class="tercero">


  <div class="encabezado">
    <h3 class= "user">USUARIO</h3>
    </div>
    <div>
    <a onclick="salida()" href="php/logout.php" class="salir" >Salir</a>
  </div>
  <div class="nombreArchivo">
    <input type="text" id="docName" placeholder="Nombre Documento">
  </div>
      <textarea name="myTextarea" id="myTextarea" class="tinymce"></textarea>
      <button onclick="guardar()">Guardar Documento</button>
      <button onclick="descargar()">Descargar</button>


</body>
</html>
