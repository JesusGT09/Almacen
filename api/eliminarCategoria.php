<?php
    include("conectardb.php");
    //valores a ingresar
    $idcategoria = $_POST['idcategoria'];

    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("DELETE FROM categoria
      WHERE id = ?");
    $sentencia->bind_param("s", $idcategoria);
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
