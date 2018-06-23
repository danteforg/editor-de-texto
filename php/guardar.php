<?php
$user=$_POST['user'];
$id=$_POST['id'];
$name=$_POST['name'];
// $user='s';
// $id=1;
// $name='hola';
$respuesta = "";

    # Buscamos al usuario en la BD
$buscar="SELECT COUNT(*) AS total
FROM docs
WHERE idDueno='{$id}'
AND nombreDoc='{$name}';";

$resultado= $con->query($buscar);

$total=$resultado->fetch_assoc();

if($total['total']!= 0)
{
  $respuesta = "mal";
  $arreglo = array(
  'logueado' => $respuesta
  );
}
else
{
        # Mandamos la consulta a la BD
  #echo "<script>alert ('Puedes iniciar sesion');</script>";
  $insertDoc="INSERT INTO docs(idDueno, nombreDoc)
           VALUES({$id}, '{$name}');";

    if($con->query($insertDoc))
      {
        $respuesta= "ok";
        $buscarDoc="SELECT * FROM docs WHERE idDueno='{$id}' AND nombreDoc='$name';";

      $resBuscarDoc=$con->query($buscarDoc);

      $res = $resBuscarDoc->fetch_assoc();

      $arreglo = array(
      'logueado' => $respuesta,
      'idDoc' => $res['idDoc']
      );
      }
      else
      {
        $respuesta = "error";
        $arreglo = array(
      'logueado' => $respuesta
      );
      }
}


echo json_encode($arreglo);



 ?>
