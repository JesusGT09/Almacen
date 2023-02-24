<?php
  require "../../class/db/clsController.php";
  $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->CrearProducto($_POST["nombre"],$_POST["precio"],
  $_POST["categoria"],
  $_POST["descripcion"], $_POST["estado"],
  $_POST["stock"],$_POST["inputNArchivo"])) {
    echo "err:ok";
  }
?>
