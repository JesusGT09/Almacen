<?php
    include("conectardb.php");
    //valores a ingresar
    $idcategoria = $_POST['idcategoria'];
    $categoria = $_POST['categoria'];

    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("UPDATE categoria SET nombre = ? WHERE id = ?");
    $sentencia->bind_param("ss", $categoria, $idcategoria);
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
