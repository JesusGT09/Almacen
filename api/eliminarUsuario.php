<?php
    include("conectardb.php");
    //valores a ingresar
    $idusuario = $_POST['idusuario'];

    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("DELETE FROM empleado
      WHERE id = ?");
    $sentencia->bind_param("s", $idusuario);
    $result = $sentencia->execute();
    if($result){
        $arrayDatos["eliminado"]="1";
    }else{
      	$arrayDatos["eliminado"]="0";
    }
    $dataArray[] = $arrayDatos;
    echo json_encode($dataArray);
    $conexion = null;
?>
