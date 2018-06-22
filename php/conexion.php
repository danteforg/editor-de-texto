<?php
function conexion() {
  $db_username="root";
  $db_password="";
  $db_host="localhost";
  $db_name="myapp";

  $link = new mysqli($db_host, $db_username, $db_password, $db_name);
  $link->set_charset("utf8");
  if ($link->connect_errno > 0) {
    return "Error conexion";
  } else {
    return $link;
  }
}
?>
