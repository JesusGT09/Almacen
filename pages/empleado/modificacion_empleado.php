<?php
  require "../../class/db/clsController.php";
  $obj_cnsc = new clsCnsc();
  if ($obj_cnsc->UpdatePersonal(
  $_POST["id"],$_POST["identificacion"],$_POST["nombre"],
  $_POST["apellido"], $_POST["telefono"],
  $_POST["usuario"],$_POST["password"], $_POST["rol"] )) {
    echo "err:ok";
  }
?>
