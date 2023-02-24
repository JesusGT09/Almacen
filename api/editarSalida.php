<?php
    include("conectardb.php");
    //valores a ingresar
    $idSalida = $_POST['idsalida'];
    $user = $_POST['user'];
    $producto = $_POST['idproducto'];
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cantidad'];
    $idtipo = $_POST['idtipo'];

    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    
    
    $antes_cantidad;
    $sql = "SELECT * FROM salida where id = '{$idSalida}'";
    mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
    $result0 = mysqli_query($conexion, $sql);
    while($row = mysqli_fetch_array($result0))
    {
         $antes_cantidad=$row['cantidad'];
    }
    
    $sentencia = $conexion->prepare("UPDATE salida
      SET cantidad = ?, fecha = ?, idProducto = ?,
      idPersonal = ?, idTipo = ?
      WHERE id = ?");
    $sentencia->bind_param("ssssss", $cantidad, $fecha, $producto, $user, $idtipo, $idSalida);
    $result = $sentencia->execute();
    if($result){
        $sent = $conexion->prepare("UPDATE producto SET stock = (stock + ?) WHERE id = ?");
        $sent->bind_param("ss", $antes_cantidad, $producto);
        $result = $sent->execute();


        $sent = $conexion->prepare("UPDATE producto SET stock = (stock - ?) WHERE id = ?");
        $sent->bind_param("ss", $cantidad, $producto);
        $result = $sent->execute();

        $arrayDatos["modificado"]="1";
    }else{
      	$arrayDatos["modificado"]="0";
    }
    $dataArray[] = $arrayDatos;
    echo json_encode($dataArray);
    $conexion = null;
?>
