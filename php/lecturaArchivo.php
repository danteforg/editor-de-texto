
<?php

	$nombre = $_GET['nombre'];

    if(file_exists($nombre))
    {
        echo nl2br(file_get_contents($nombre));
    }
    else
    {
        echo "";
    }

 ?>
