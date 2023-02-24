<?php
   include("conectardb.php");
   $conexion = conectar();

   $sql = "SELECT s.id, s.cantidad, s.fecha, s.idProducto, p.nombre, p.foto, s.idTipo, t.nombre AS tipo FROM salida AS s INNER JOIN producto AS p ON p.id = s.idProducto INNER JOIN tipo AS t ON s.idTipo = t.id";

   mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
   if(!$result = mysqli_query($conexion, $sql)) die();
   $salidas = array(); //creamos un array
   while($row = mysqli_fetch_array($result))
   {
         $id=$row['id'];
         $cantidad=$row['cantidad'];
         $fecha=$row['fecha'];
         $idProducto=$row['idProducto'];
         $nombre=$row['nombre'];
         $foto=$row['foto'];
         $idTipo=$row['idTipo'];
         $tipo=$row['tipo'];

         $salidas[] = array('id'=> $id, 'cantidad'=> $cantidad, 'fecha'=> $fecha,
                           'idProducto'=> $idProducto, 'foto'=> $foto, 'nombre'=> $nombre,
                           'idTipo'=> $idTipo, 'tipo'=> $tipo
                         );
   }

   $close = mysqli_close($conexion)
   or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
   $json_string = json_encode($salidas);
   echo $json_string;
?>
