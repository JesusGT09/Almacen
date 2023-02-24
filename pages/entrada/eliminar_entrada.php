<?php
 require "../../class/db/clsController.php";
 $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->EliminarEntrada($_POST["id"])) {
    echo "<script>funcionajax('pages/entrada/index.php','contenido-main','');</script>";
  }
 ?>
