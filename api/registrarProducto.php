<?php
    include("conectardb.php");
    //valores a ingresar
    
    $producto = $_POST['producto'];
    $imagen= $_POST['foto'];
    $nombre = $producto.".jpg";
    
    $path = "../pages/producto/upload/$nombre";
    file_put_contents($path, base64_decode($imagen));

//    $path = "$nombre.png";


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
    $sentencia = $conexion->prepare("INSERT INTO producto(nombre, descripcion, precio, stock, foto, estado, fk_categoria) VALUES(?,?,?,?,?,?,?)");
    $sentencia->bind_param("sssssss",$producto, $descripcion, $precio,$stock,$nombre, $estado, $idcategoria);
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
