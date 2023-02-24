<?php
class dbConect
{
	public $conConnection;
	private $strDBServer,$strDBUsername,$strDBPassword, $strDBName;

	public function __construct()
	{

			$this->strDBServer= "localhost";
			$this->strDBUsername="root";
			$this->strDBPassword="";
			$this->strDBName="inventario";

	}

	public function conexion(){
		$mysqli = new mysqli($this->strDBServer, $this->strDBUsername, $this->strDBPassword, $this->strDBName);
    if (!$mysqli->connect_errno) {
      $this->conConnection = $mysqli;
			return $this->conConnection;
    }

		if(isset($this->conConnection)){
			mysqli_close($this->conConnection);
		}
	}

	public function ejecutarQuery($query){
		$ejecutar = mysqli_query($this->conexion(), $query);
		return $ejecutar;
	}
}
