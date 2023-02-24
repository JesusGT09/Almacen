<?php
    include("conectardb.php");
    //valores a ingresar
    $tipo = $_POST['tipo'];

    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("INSERT INTO tipo(nombre) VALUES(?)");
    $sentencia->bind_param("s", $tipo);
    $result = $sentencia->execute();
    if($result){
        $arrayDatos["insertado"]="1";
    }else{
      	$arrayDatos["insertado"]="0";
    }
    $dataArray[] = $arrayDatos;
    echo json_encode($dataArray);
    $conexion = null;
?>
