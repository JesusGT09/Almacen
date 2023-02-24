<?php
include("conectardb.php");
$dataArray = array();
if(isset($_POST['correo']) && isset($_POST['password'])){
    $susername = $_POST['correo'];
    $spassword = $_POST['password'];
    $sincr = "1";
    //envia respues en json
    $conexion = conectar();
    $stmt = $conexion->prepare("SELECT * FROM empleado AS u WHERE u.correo = ? AND password = ? LIMIT 1");
    $stmt->bind_param('ss', $susername, $spassword);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows == 1) {
      $stmt->bind_result($id, $identificacion, $nombre, $apellido, $correo, $password, $telefono,  $rol);
      if($stmt->fetch()){
            $arrayDatos["resultado"]="1";
            $arrayDatos["id"]=$id;
            $arrayDatos["identificacion"]=$identificacion;
            $arrayDatos["nombre"]=$nombre;
            $arrayDatos["apellido"]=$apellido;
            $arrayDatos["correo"]=$correo;
            $arrayDatos["password"]=$password;
            $arrayDatos["telefonod"]=$telefono;
            $arrayDatos["rol"]=$rol;
          }else{
            $arrayDatos["resultado"]="0";
          }
    } else {
       $arrayDatos["resultado"]="0";
    }
    $stmt->close();
    $conexion->close();
} else {
  $arrayDatos["resultado"]="2";
}
$dataArray[] = $arrayDatos;
echo json_encode($dataArray);
?>
