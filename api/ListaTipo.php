<?php
   include("conectardb.php");
   $conexion = conectar();

   $sql = "SELECT e.id, e.nombre FROM tipo AS e";

   mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
   if(!$result = mysqli_query($conexion, $sql)) die();
   $tipo = array(); //creamos un array
   while($row = mysqli_fetch_array($result))
   {
         $id=$row['id'];
         $nombre=$row['nombre'];

         $tipo[] = array('id'=> $id, 'tipo'=> $nombre );
   }

   $close = mysqli_close($conexion)
   or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
   $json_string = json_encode($tipo);
   echo $json_string;
?>
