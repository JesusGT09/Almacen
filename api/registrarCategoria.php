<?php
    include("conectardb.php");
    //valores a ingresar
    $categoria = $_POST['categoria'];

    date_default_timezone_set('America/Mexico_City');
    $now = date('Y-m-d H:i:s');
    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("INSERT INTO categoria(nombre) VALUES(?)");
    $sentencia->bind_param("s", $categoria);
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
