<?php
 require "../../class/db/clsController.php";
 $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->EliminarSalida($_POST["id"])) {
    echo "<script>funcionajax('pages/salida/index.php','contenido-main','');</script>";
  }
 ?>
