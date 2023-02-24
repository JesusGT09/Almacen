<?php
  require "../../class/db/clsController.php";
  $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->UpdateSalida(
  $_POST["id"],$_POST["fecha"]
  $_POST["producto"],$_POST["tipo"]
  $_POST["iduser"],$_POST["cantidad"]
  )) {
    echo "err:ok";
  }
?>
