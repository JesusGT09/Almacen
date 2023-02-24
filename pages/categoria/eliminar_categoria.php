<?php
 require "../../class/db/clsController.php";
 $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->EliminarCategoria($_POST["id"])) {
    echo "<script>funcionajax('pages/categoria/index.php','contenido-main','');</script>";
  }
 ?>
