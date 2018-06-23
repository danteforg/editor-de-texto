<?php

	$contenido = $_POST['texto'];
	$nombreArch = $_POST['nombre'];

    if ($contenido == NULL || $contenido == "") {
        $contenido = " ";
    }

	if (file_exists($nombreArch)) { //En caso de que exista el archivo
        echo 2;
	}
	else {
        echo 1;
	}

    if($archivo = fopen($nombreArch, "w"))
    {
        if(fwrite($archivo, $contenido))
        {
            echo "si";
        }
        else
        {
            echo "no";
        }

        fclose($archivo);
    }
    // echo "texto=".$texto."name=".$nombreArch;
 ?>
