<?php

class Modelo{

	protected $host = "localhost";
	protected $db_name = "baseproyecto";
	protected $username = "root";
	protected $password = "";
	protected $conexion;
	protected $nombretabla;

/**
* Constructor de la clase
* @access public
*/
public function Modelo(){

try{

	$this->conexion = new PDO ("mysql:host={$this->host};dbname={$this->db_name}",$this->username,$this->password);

}catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}
}

/**
* Se encarga de ejecutar la conexion
* @param String consulta
* @access public
*/
public function query($query){
	return $this->conexion->query($query);
}

/**
* Se encarga de construir y ejecutar una consulta para insetar a la base de datos
* @access public
*/

public function insert($nombretabla, $params) {
	$query  =  "INSERT INTO $nombretabla SET ";
	$coma = "";
	foreach ( $params as $clave => $valor ) {
			$query .= $coma."$clave = '$valor'";
			$coma =",";
		}
		echo $query;
		$this->query($query);	
		print_r($this->conexion->errorInfo());
	}
/**
* Se encarga de construir y ejecutar una consulta para borrar de la base de datos
* @access public
*/
	public function delete($nombretabla, $id){
		$query = "DELETE FROM $nombretabla WHERE id = $id";
		echo $query;
		$this->query($query);

	}

	/**
* Se encarga de construir y ejecutar una consulta para actualizar en la base de datos
* @access public
*/

	public function update($nombretabla, $id, $params){

		$query = "UPDATE $nombretabla SET ";
		$coma = "";
		foreach ($params as $clave => $valor) {
			$query .= $coma. "$clave = '$valor' ";
			$coma = ",";
		}
		$query.="WHERE id = $id";
		echo $query;
		$this->query($query);
		
	}

}
?>