<?php
  require "../../class/db/clsController.php";
  $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->CrearTipo($_POST["nombre"])) {
    echo "err:ok";
  }
?>
