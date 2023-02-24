<?php
 require "../../class/db/clsController.php";
 $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->EliminarProducto($_POST["id"])) {
    echo "<script>funcionajax('pages/producto/index.php','contenido-main','');</script>";
  }
 ?>
