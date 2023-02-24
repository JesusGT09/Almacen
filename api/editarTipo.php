<?php
    include("conectardb.php");
    //valores a ingresar
    $idtipo = $_POST['idtipo'];
    $tipo = $_POST['tipo'];

    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("UPDATE tipo SET nombre = ? WHERE id = ?");
    $sentencia->bind_param("ss", $tipo, $idtipo);
    $result = $sentencia->execute();
    if($result){
        $arrayDatos["modificado"]="1";
    }else{
      	$arrayDatos["modificado"]="0";
    }
    $dataArray[] = $arrayDatos;
    echo json_encode($dataArray);
    $conexion = null;
?>
