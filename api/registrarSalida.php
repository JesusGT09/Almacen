<?php
    include("conectardb.php");
    //valores a ingresar
    $user = $_POST['user'];
    $producto = $_POST['producto'];
    $tipo = $_POST['tipo'];
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cantidad'];

    date_default_timezone_set('America/Mexico_City');
    $now = date('Y-m-d H:i:s');
    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("INSERT INTO salida(cantidad, fecha, idProducto, idPersonal, idTipo) VALUES(?, ? ,?, ?, ?)");
    $sentencia->bind_param("sssss", $cantidad, $fecha, $producto, $user, $tipo);
    $result = $sentencia->execute();
    if($result){
        $sent = $conexion->prepare("UPDATE producto SET stock = (stock - ?) WHERE id = ?");
        $sent->bind_param("ss", $cantidad, $producto);
        $result = $sent->execute();

        $arrayDatos["insertado"]="1";
    }else{
      	$arrayDatos["insertado"]="0";
    }
    $dataArray[] = $arrayDatos;
    echo json_encode($dataArray);
    $conexion = null;
?>
