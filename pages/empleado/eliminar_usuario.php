<?php
 require "../../class/db/clsController.php";
 $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->EliminarUsuario($_POST["id"])) {
    echo "<script>funcionajax('pages/empleado/index.php','contenido-main','');</script>";
  }
 ?>
