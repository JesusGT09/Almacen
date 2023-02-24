<?php
    include("conectardb.php");
    //valores a ingresar
    $idEntrada = $_POST['identrada'];
    $idproducto = $_POST['idproducto'];
    $cantidad = $_POST['cantidad'];

    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("DELETE FROM entrada
      WHERE id = ?");
    $sentencia->bind_param("s", $idEntrada);
    $result = $sentencia->execute();
    if($result){
        $sent = $conexion->prepare("UPDATE producto SET stock = (stock - ?) WHERE id = ?");
        $sent->bind_param("ss", $cantidad, $idproducto);
        $result = $sent->execute();

        $arrayDatos["eliminado"]="1";
    }else{
      	$arrayDatos["eliminado"]="0";
    }
    $dataArray[] = $arrayDatos;
    echo json_encode($dataArray);
    $conexion = null;
?>
