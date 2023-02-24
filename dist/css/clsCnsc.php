<?php
require_once(__DIR__."../../class/db/dbClass.php");

class clsCnsc{
  public $id, $link, $estado;
  public $conexion;

  public function __construct(){
    $this->conexion = new dbConect();
  }


  public function ConsultarLink(){
    //$hoy = date('Y-m-d');
    $resultado = $this->conexion->ejecutarQuery("SELECT * FROM EnDesarrollo ORDER BY id DESC");
    return $resultado;
  }


  public function CrearLink($link, $estado){
    $this->link = $link;
    $this->estado = $estado;

  $resultado = $this->conexion->ejecutarQuery("INSERT INTO
      endesarrollo(link, estado)
      VALUES ('{$this->link}','{$this->estado}');");

    return true;
  }
}
?>
