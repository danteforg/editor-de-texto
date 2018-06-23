<?php 

	$texto = $_POST['texto'];
	$nombre = $_POST['nombre'];

    if ($texto == NULL || $texto == "") {
        $texto = " ";
    }

	if (file_exists($nombre)) { //En caso de que exista el archivo
        echo "modificado";
	}
	else {
        echo "creado";
	}
 
    if($archivo = fopen($nombre, "w"))
    {
        if(fwrite($archivo, $texto))
        {
            echo "ok";
        }
        else
        {
            echo "mal";
        }
 
        fclose($archivo);
    }
    // echo "texto=".$texto."name=".$nombre;
 ?>