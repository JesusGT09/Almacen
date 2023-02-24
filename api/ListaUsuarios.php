<?php
   include("conectardb.php");
   $conexion = conectar();

   $sql = "SELECT e.id, e.identificacion, e.nombre, e.apellido, e.correo,  e.password, e.telefono, e.rol FROM empleado AS e";

   mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
   if(!$result = mysqli_query($conexion, $sql)) die();
   $tipo = array(); //creamos un array
   while($row = mysqli_fetch_array($result))
   {
         $id=$row['id'];
         $identificacion=$row['identificacion'];
         $nombre=$row['nombre'];
         $apellido=$row['apellido'];
         $correo=$row['correo'];
         $password=$row['password'];
         $telefono=$row['telefono'];
         $rol=$row['rol'];

         $tipo[] = array('id'=> $id, 'identificacion'=> $identificacion,  'nombre'=> $nombre,
                          'apellido'=> $apellido,
                         'correo'=> $correo, 'password'=> $password,  'telefono'=> $telefono, 'rol'=> $rol
        );
   }

   $close = mysqli_close($conexion)
   or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
   $json_string = json_encode($tipo);
   echo $json_string;
?>
