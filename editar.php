<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
?>
<HTML>
<HEAD>
  <TITLE>Editor</TITLE>
      <script src="plugin/tinymce/tinymce.min.js"></script>
      <script type="text/javascript"  src="plugin/tinymce/tinymce.min.js"></script>
      <script type="text/javascript"  src="js/jquery.min.js"></script>
      <script type="text/javascript"  src="plugin/tinymce/init-tinymce.js"></script>
      <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/Estilos.css">
</HEAD>
<BODY class="tercero">
      
      
  <div class="encabezado">
    <h3 class= "user">USUARIO</h3>
    </div>
    <div>
    <a onclick="salida()" href="php/logout.php" class="salir" >Salir</a>
  </div>
      <textarea name="myTextarea" id="myTextarea" class="tinymce"></textarea>


</BODY>
</HTML>
