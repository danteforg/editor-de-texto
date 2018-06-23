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
<title>editor</title>

</head>
<body>


<form id="form1" class="form1" name="form1" method="post" action="">
  <div>
  <input type="button" class="a1" name="Submit1"  onclick="formato('bold')" />
  <input type="button" class="a2" name="Submit2" onclick="formato('italic')" />
  <input type="button" class="a3" name="Submit3"  onclick="formato('underline')" />
  <input type="button" class="a4" name="Submit4" onclick="formato('RemoveFormat')" />
  <input type="button" class="a5" name="Submit5" onclick="insertarEnlace()" />
  <input type="button" class="a6" name="Submit9" onclick="formato('Unlink')" />
  <input type="button" class="a7" name="Submit6" onclick="insertarImagen()" />
  <input type="button" class="a8" name="Submit7" onclick="color('#FF0000')" />
  <input type="button" class="a9" name="Submit8" onclick="colorFondo('#FF0000')" />
  <input type="button" class="a10" name="Submit10" onclick="formato('undo')" />
  <input type="button" class="a11" name="Submit11" onclick="formato('redo')" />
  <input type="button" class="a12" name="Submit12"  onclick="inHTML()" />
  <input type="button" class="a13" name="Submit13" onclick="guardar()" />
  </div>



</form>

<form>
  <iframe class="edit" id="edit" style="  position: absolute; width: 100%; top: 100px; height: 550px; border:1px solid #000; background: white; max-width: 1490px; left:20px;"></iframe>
</form>
<form>
  <div id="ht" style="position: absolute; width: 100%; top: 100px; height: 550px; border:1px solid #000; background: #E0ECF8; display:none;max-width: 1490px; left:20px"></div>
</form>
<form>
  <div class="ht">
    <input name="ver" type="button" id="ver" onclick="htmlOEditor(event)" value="html" />
  </div>
</form>

  <form>
    <div class="encabezado">
      <h3 class= "user"></h3>
    </div>
    <div>
      <a onclick="salida()" href="php/logout.php" class="salir" >Salir</a>
    </div>
  </form>
</body>
</html>