<?php
  require "../../class/db/clsController.php";
  $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->CrearSalida($_POST["fecha"],$_POST["producto"], $_POST["id"], $_POST["cantidad"])) {
    echo "err:ok";
  }else{
    echo "err:bad";
  }
?>
