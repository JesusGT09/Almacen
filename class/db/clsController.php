<?php
require_once("dbClass.php");

class clsCnsc{
  public $id, $link, $estado;
  public $conexion;


  public function EliminarTipo($id){
    $this->id = $id;
    $resultado = $this->conexion->ejecutarQuery("DELETE FROM tipo WHERE id = '{$this->id}';");
      return true;
  }
  public function EliminarEntrada($id){
    $this->id = $id;
    $resultado = $this->conexion->ejecutarQuery("DELETE FROM entrada WHERE id = '{$this->id}';");
      return true;
  }
  public function EliminarSalida($id){
    $this->id = $id;
    $resultado = $this->conexion->ejecutarQuery("DELETE FROM salida WHERE id = '{$this->id}';");
      return true;
  }
  public function EliminarProducto($id){
    $this->id = $id;
    $resultado = $this->conexion->ejecutarQuery("DELETE FROM producto WHERE id = '{$this->id}';");
      return true;
  }
  public function EliminarCategoria($id){
    $this->id = $id;
    $resultado = $this->conexion->ejecutarQuery("DELETE FROM categoria WHERE id = '{$this->id}';");
      return true;
  }
  public function EliminarUsuario($id){
    $this->id = $id;
    $resultado = $this->conexion->ejecutarQuery("DELETE FROM empleado WHERE id = '{$this->id}';");
      return true;
  }


  public function CantidadClientes(){
    $resultado = $this->conexion->ejecutarQuery("SELECT count(*) AS cantidad FROM empleado");
    return $resultado;
  }
  public function CantidadProducto(){
    $resultado = $this->conexion->ejecutarQuery("SELECT count(*) AS cantidad FROM producto");
    return $resultado;
  }
  public function CantidadCategoria(){
    $resultado = $this->conexion->ejecutarQuery("SELECT count(*) AS cantidad FROM categoria");
    return $resultado;
  }


  public function CantidadMesEntrada($id){
      $resultado = $this->conexion->ejecutarQuery("SELECT count(*) AS id FROM `entrada` WHERE MONTH(fecha) = $id ");
      return $resultado;
  }
  public function CantidadMesSalida($id){
      $resultado = $this->conexion->ejecutarQuery("SELECT count(*) AS id FROM `salida` WHERE MONTH(fecha) = $id ");
      return $resultado;
  }



  public function __construct(){
    $this->conexion = new dbConect();
  }

  public function ConsultarEntrada(){
    $resultado = $this->conexion->ejecutarQuery("SELECT e.id, e.cantidad, e.fecha, e.idProducto, e.idPersonal, p.nombre, p.foto FROM entrada AS e INNER JOIN producto AS p ON e.idProducto = p.id");
    return $resultado;
  }
  public function ConsultarSalida(){
    $resultado = $this->conexion->ejecutarQuery("SELECT s.id, s.cantidad, s.fecha, s.idProducto, s.idPersonal, p.nombre, p.foto FROM salida AS s INNER JOIN producto AS p ON s.idProducto = p.id");
    return $resultado;
  }

  public function ConsultarTipo(){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM tipo");
    return $resultado;
  }

  public function ConsultarProducto(){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM producto");
    return $resultado;
  }
  public function ConsultarCategoria(){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM categoria");
    return $resultado;
  }

  public function ConsultarIdTipo($id){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM tipo WHERE id  = '{$id}'");
    return $resultado;
  }
  public function ConsultarIdProducto($id){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM producto WHERE id  = '{$id}'");
    return $resultado;
  }
  public function ConsultarIdSalida($id){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM salida WHERE id  = '{$id}'");
    return $resultado;
  }
  public function ConsultarIdEntrada($id){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM entrada WHERE id  = '{$id}'");
    return $resultado;
  }
  public function ConsultarIdCategoria($id){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM categoria WHERE id  = '{$id}'");
    return $resultado;
  }
  public function ConsultarIdEmpleado($id){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM empleado WHERE id  = '{$id}'");
    return $resultado;
  }



  public function ConsultarEmpleado(){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM empleado");
    return $resultado;
  }

  public function ValidarUser($nombre, $password){
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM empleado WHERE correo = '{$nombre}' AND password = '{$password}'");
    return $resultado;
  }




  public function CrearEntrada($fecha, $producto, $id, $cantidad){
    $this->fecha = $fecha;
    $this->producto = $producto;
    $this->id = $id;
    $this->cantidad = $cantidad;

    if($this->producto == "No se encontraron registros"){
      return false;
    }

    $resultado = $this->conexion->ejecutarQuery("INSERT INTO  entrada(cantidad, fecha, idProducto, idPersonal)
    VALUES ('{$this->cantidad}','{$this->fecha}','{$this->producto}', '{$this->id}');");
    return true;
  }

  public function CrearSalida($fecha, $producto, $id, $cantidad){
    $this->fecha = $fecha;
    $this->producto = $producto;
    $this->id = $id;
    $this->cantidad = $cantidad;

    if($this->producto == "No se encontraron registros"){
      return false;
    }

    $resultado = $this->conexion->ejecutarQuery("INSERT INTO  salida(cantidad, fecha, idProducto, idPersonal)
    VALUES ('{$this->cantidad}','{$this->fecha}','{$this->producto}', '{$this->id}');");
    return true;
  }

  public function UpdatePersonal($id, $identificacion, $nombre, $apellido, $telefono, $usuario, $password, $rol){
    $this->id = $id;
    $this->identificacion = $identificacion;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->telefono = $telefono;
    $this->usuario = $usuario;
    $this->password = $password;
    $this->rol = $rol;

    $resultado = $this->conexion->ejecutarQuery("UPDATE empleado
      SET
      identificacion = '{$identificacion}',
      nombre = '{$nombre}',
      apellido = '{$apellido}',
      correo = '{$usuario}',
      password = '{$password}',
      telefono = '{$telefono}'
      WHERE id = '{$id}'");

    return true;
  }








  public function UpdateSalida($id, $fecha, $producto, $tipo, $user, $cantidad){
    $this->id = $id;
    $this->fecha = $fecha;
    $this->producto = $producto;
    $this->tipo = $tipo;
    $this->user = $user;
    $this->cantidad = $cantidad;

    $resultado = $this->conexion->ejecutarQuery("UPDATE salida
      SET
      fecha = '{$fecha}',
      idProducto = '{$producto}',
      idPersonal = '{$user}',
      idTipo = '{$tipo}',
      cantidad = '{$cantidad}',
      WHERE id = '{$id}'");

    return true;
  }

  public function UpdateEntrada($id, $fecha, $producto, $tipo, $user, $cantidad){
    $this->id = $id;
    $this->fecha = $fecha;
    $this->producto = $producto;
    $this->tipo = $tipo;
    $this->user = $user;
    $this->cantidad = $cantidad;

    $resultado = $this->conexion->ejecutarQuery("UPDATE entrada
      SET
      fecha = '{$fecha}',
      idProducto = '{$producto}',
      idPersonal = '{$user}',
      idTipo = '{$tipo}',
      cantidad = '{$cantidad}',
      WHERE id = '{$id}'");

    return true;
  }










  public function UpdateCategoria($id, $categoria){
    $this->id = $id;
    $this->categoria = $categoria;

    $resultado = $this->conexion->ejecutarQuery("UPDATE categoria
      SET
      nombre = '{$categoria}'
      WHERE id = '{$id}'");

    return true;
  }


  public function UpdateTipo($id, $nombre){
    $this->id = $id;
    $this->nombre = $nombre;

    $resultado = $this->conexion->ejecutarQuery("UPDATE tipo
      SET
      nombre = '{$nombre}'
      WHERE id = '{$id}'");

    return true;
  }



  public function CrearPersonal($identificacion, $nombre, $apellido, $telefono, $usuario, $password, $rol){
    $this->identificacion = $identificacion;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->telefono = $telefono;
    $this->usuario = $usuario;
    $this->password = $password;
    $this->rol = $rol;

    $resultado = $this->conexion->ejecutarQuery("INSERT INTO Empleado(identificacion, nombre, apellido, telefono, correo, password, rol)
    VALUES ('{$this->identificacion}','{$this->nombre}','{$this->apellido}', '{$this->telefono}', '{$this->usuario}', '{$this->password}', '{$this->rol}');");
    return true;
  }

  public function CrearTipo($tipo){
    $this->tipo = $tipo;
    $resultado = $this->conexion->ejecutarQuery("INSERT INTO tipo(nombre) VALUES ('{$this->tipo}');");
    return true;
  }

  public function CrearCategoria($categoria){
    $this->categoria = $categoria;
    $resultado = $this->conexion->ejecutarQuery("INSERT INTO categoria(nombre) VALUES ('{$this->categoria}');");
    return true;
  }


  public function CrearProducto($nombre, $precio, $categoria, $descripcion, $estado, $stock,  $foto){
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->categoria = $categoria;
    $this->descripcion = $descripcion;
    $this->estado = $estado;
    $this->stock = $stock;
    $this->foto = $foto;

    $resultado = $this->conexion->ejecutarQuery("INSERT INTO producto(nombre, descripcion, precio, stock, foto, estado, fk_categoria)
    VALUES ('{$this->nombre}','{$this->descripcion}','{$this->precio}', '{$this->stock}','{$this->foto}','{$this->estado}','{$this->categoria}');");
    return true;
  }







  public function UpdateProducto($id, $nombre, $precio, $categoria, $descripcion, $estado, $stock,  $foto){
    $this->id = $id;
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->categoria = $categoria;
    $this->descripcion = $descripcion;
    $this->estado = $estado;
    $this->stock = $stock;
    $this->foto = $foto;

    $resultado = $this->conexion->ejecutarQuery("UPDATE producto
      SET
      nombre = '{$nombre}',
      descripcion = '{$descripcion}',
      precio = '{$precio}',
      stock = '{$stock}',
      foto = '{$foto}',
      estado = '{$estado}',
      fk_categoria = '{$categoria}'
      WHERE id = '{$id}'");

    return true;
  }




//AQUI COMIENZA EL CONTENIDO BRAVO
public function ConsultarIdlavanderia($id){
  $this->id = $id;
  $resultado = $this->conexion->ejecutarQuery("SELECT * FROM  lavanderia WHERE id = '1'");
  return $resultado;
}
}
?>
