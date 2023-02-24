<?php
  require "../../class/db/clsController.php";
  $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->UpdateCategoria(
  $_POST["id"],$_POST["categoria"])) {
    echo "err:ok";
  }
?>
