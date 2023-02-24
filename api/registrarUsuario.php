<?php
    include("conectardb.php");
    //valores a ingresar
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
    $sentencia = $conexion->prepare("INSERT INTO empleado(identificacion, nombre, apellido, correo, password, telefono, rol) VALUES(? ,? ,? ,? ,? ,? ,?)");
    $sentencia->bind_param("sssssss", $identificacion,$nombre,$apellido,$correo,$password,$telefono,$rol);
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
