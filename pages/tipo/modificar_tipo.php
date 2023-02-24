<?php
  require "../../class/db/clsController.php";
  $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->UpdateTipo(
  $_POST["id"],$_POST["nombre"])) {
    echo "err:ok";
  }
?>
