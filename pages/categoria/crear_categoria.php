<?php
  require "../../class/db/clsController.php";
  $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->CrearCategoria($_POST["categoria"])) {
    echo "err:ok";
  }
?>
