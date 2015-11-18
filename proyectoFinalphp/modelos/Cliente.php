<?php
require_once 'Libs/Modelo.php';

/**
* Modelo cliente, contiene todo lo referente a el modelado de el cliente
* Implemente los metodos, como consultas y constructor
*
* @author Juan Jose Perdomo Forero
* @author Andres feliPe Perdomo Forero
*
* @package modelos
*/

class Cliente extends Modelo
{

 function __construct(){
 	parent::__construct();

 }

/**
* Se encarga de llamar el metodo insert que hereda de modelo 
* para registrar un usuario en la base de datos
* @access public
*/

public function insertUsuario($nombretabla, $params){
	$this->insert($nombretabla,$params);
}

/**
* Se encarga de llamar el metodo insert que hereda de modelo 
* para registrar un usuario en la base de datos
* @access public
*/


/**
* Se encarga de ejecutar una consulta a  la base de datos
* para autentificar al usuario
* @access public
*/
public function authenticate($contraseña,$correo){
	 	return $this->query("Select * from usuario where contrasena='$contraseña' and correo='$correo'");
	}

/**
* Se encarga de ejecutar una consulta a  la base de datos
* para  devolver todos los productos existentes
* @access public
*/

public function consulta(){
	return $this->query("Select * from producto");
}

}
?>