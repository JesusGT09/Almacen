<?php
 require "../../class/db/clsController.php";
 $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->EliminarTipo($_POST["id"])) {
    echo "<script>funcionajax('pages/tipo/index.php','contenido-main','');</script>";
  }
 ?>
