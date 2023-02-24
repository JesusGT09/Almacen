<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
require_once("../../../class/dbClass.php");
session_start();

if (isset($_FILES)) {
  $con=new dbConect(1);

  $po = explode("_", $_POST['id']);
  if(!empty($po[1])){
    $id = $po[1];
  }else{
    $correint = $con->executeQuery("SELECT * FROM t_correspondencia_interna WHERE c_f_ci_entidad = '{$po[0]}' ORDER BY c_ci_id DESC LIMIT 1");
    $correspint = mysql_fetch_array($correint);
    $id = $correspint['c_ci_id'];
  }



  if (mkdir("../../../archivos/correspondencia/interna/{$id}", 0755, true)) {}
  if (chmod("../../../archivos/correspondencia/interna/{$id}/", 0777)) {}
  $count = 0;
if (isset($_FILES)) {
    $count ++;
    if ($key['error'] == UPLOAD_ERR_OK) {
      if (move_uploaded_file($key['tmp_name'], "../../../archivos/correspondencia/interna/{$id}/{$key['name']}")) {
        $count++;
      }
    }
  }
  if ($count > 0) {
    echo "ok";
  }
}else {
  echo "ok";
}
?>
