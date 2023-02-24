<?php
    include("conectardb.php");
    //valores a ingresar
    $id = $_POST['id'];
    $identificacion = $_POST['identificacion'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];


    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("UPDATE empleado SET
      identificacion = ?,
      nombre = ?,
      apellido = ?,
      correo = ?,
      telefono = ?,
      password = ?,
      rol = ?
      WHERE id = ?");
    $sentencia->bind_param("ssssssss", $identificacion, $nombre, $apellido, $correo, $telefono, $password, $rol, $id);
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
