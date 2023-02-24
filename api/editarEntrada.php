<?php
    include("conectardb.php");
    //valores a ingresar
    $identrada = $_POST['identrada'];
    $user = $_POST['user'];
    $producto = $_POST['producto'];
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cantidad'];
    $idtipo = $_POST['idtipo'];
    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    
    $antes_cantidad;
    $sql = "SELECT * FROM entrada where id = '{$identrada}'";
    mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
    $result0 = mysqli_query($conexion, $sql);
    while($row = mysqli_fetch_array($result0))
    {
         $antes_cantidad=$row['cantidad'];
    }
    
    
    //inserta los datos
    $sentencia = $conexion->prepare("UPDATE entrada
      SET cantidad = ?, fecha = ?, idProducto = ?,
      idPersonal = ?, idTipo = ?
      WHERE id = ?");
    $sentencia->bind_param("ssssss", $cantidad, $fecha, $producto, $user, $tipo, $idEntrada);
    $result = $sentencia->execute();
    if($result){
        $sent = $conexion->prepare("UPDATE producto SET stock = (stock - ?) WHERE id = ?");
        $sent->bind_param("ss", $antes_cantidad, $producto);
        $result = $sent->execute();


        $sent = $conexion->prepare("UPDATE producto SET stock = (stock + ?) WHERE id = ?");
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
