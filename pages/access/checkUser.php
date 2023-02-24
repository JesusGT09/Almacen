<?php
require "../../class/db/clsController.php";
$obj_cnsc = new clsCnsc();
$resultado_cnsc = $obj_cnsc->ValidarUser($_POST['username'],$_POST['password']);
if(mysqli_num_rows($resultado_cnsc)>0){
     $listar_user = mysqli_fetch_assoc($resultado_cnsc);
     session_start();
     $_SESSION['username'] = $listar_user['correo'];
     $_SESSION['password'] = $listar_user['password'];
     $_SESSION['codigo'] = $listar_user['id'];
    // header('Location:http://192.168.0.55/easypos/index.php');
    echo "err:ok";
}else{
    echo "";
}

?>
