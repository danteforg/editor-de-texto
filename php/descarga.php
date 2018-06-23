<?php

	require("conexion.php");
	$con = conexion();

    $nombreDoc = $_GET['name'];
    $content = $_GET['doc'];

    // $nombreDoc = "nanes";
    // $content = "gg";


   header("Content-type: application/vnd.ms-word");
   header("Content-Disposition: attachment; Filename=$nombreDoc.doc");
?>

<!DOCTYPE html>
<html xmlns='http://www.w3.org/TR/REC-html40' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word'>

   <head>
      <meta charset="Windows-1252" />
   </head>

   <body>

      <?php
        echo $content;
       ?>

   </body>

</html>
