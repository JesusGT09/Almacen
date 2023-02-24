<?php
   include("conectardb.php");
   $conexion = conectar();

   $sql = "SELECT p.id, p.nombre AS product,p.precio ,p.foto, p.descripcion, p.foto, p.stock, p.estado, p.fk_categoria, c.nombre FROM producto AS p INNER JOIN categoria AS c ON c.id = p.fk_categoria";

   mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
   if(!$result = mysqli_query($conexion, $sql)) die();
   $platos = array(); //creamos un array
   while($row = mysqli_fetch_array($result))
   {
         $id=$row['id'];
         $nombre=$row['product'];
         $precio=$row['precio'];
         $descripcion=$row['descripcion'];
         $foto=$row['foto'];
         $stock=$row['stock'];
         $estado=$row['estado'];

         $fkcategoria=$row['fk_categoria'];
         $categoria=$row['nombre'];

         $platos[] = array('id'=> $id, 'nombre'=> $nombre, 'precio'=> $precio,
                           'descripcion'=> $descripcion, 'foto'=> $foto, 'stock'=> $stock,
                           'estado'=> $estado, 'fkcategoria'=> $fkcategoria,'categoria'=> $categoria );
   }

   $close = mysqli_close($conexion)
   or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
   $json_string = json_encode($platos);
   echo $json_string;
?>
