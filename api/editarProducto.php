<?php
    include("conectardb.php");
    //valores a ingresar
    $producto = $_POST['producto'];
    $imagen= $_POST['foto'];
    $nombre = $producto.".jpg";

    $path = "../pages/producto/upload/$nombre";
    file_put_contents($path, base64_decode($imagen));


    $idProducto = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $idcategoria = $_POST['idcategoria'];
    $estado = "activo";

    $dataArray = array();
    //funtion conectar de conectardb.php
    $conexion = conectar();
    //inserta los datos
    $sentencia = $conexion->prepare("UPDATE producto
      SET nombre = ?, descripcion = ?, precio = ?,
      stock = ?, foto = ?, estado = ?,
      fk_categoria = ?
      WHERE id = ?");
    $sentencia->bind_param("ssssssss",$producto, $descripcion, $precio,$stock, $nombre, $estado, $idcategoria, $idProducto);
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
