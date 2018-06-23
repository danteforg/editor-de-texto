<?php

	require("conexion.php");
	$con = conexion();

    $name = $_GET['name'];
    $doc = $_GET['doc'];

    // $name = "nanes";
    // $doc = "gg";


   header("Content-type: application/vnd.ms-word");
   header("Content-Disposition: attachment; Filename=$name.doc");
?>

<!DOCTYPE html>
<html xmlns='http://www.w3.org/TR/REC-html40' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word'>

   <head>
      <meta charset="Windows-1252" />
   </head>

   <body>

      <?php
        echo $doc;
       ?>

   </body>

</html>
