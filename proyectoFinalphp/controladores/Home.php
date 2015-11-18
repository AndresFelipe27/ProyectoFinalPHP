<?php
	include "libs/Controlador.php";
	/**
* Es el controlador, se encarga de comunicar las vistas con los modelos
* Permite el funcionamiento conjunto de el Proyecto
*
* @author Juan Jose Perdomo Forero
* @author Andres feliPe Perdomo Forero
*
* @package Controladores
*/
class Home extends Controlador{

	/**
* Imprime los parametros 
*
* @access public
*/

	public function imprimir(){
		print_r($this->parametros);
	}

	/**
* Carga la vista "index" del proyecto
*
* @access public
*/
	public function index(){
		$this->cargarVista("index");	
	}
/**
* Carga la vista "registroUsuario" del proyecto
*
* @access public
*/
	public function registrarUsu(){
		$this->cargarVista("registroUsuario");
	}
/**
* Carga la vista "registroEmpresa" del proyecto
*
* @access public
*/
	public function registrarEmp(){
		$this->cargarVista("registroEmpresa");
	}

/**
* Carga la vista "login" del proyecto
*
* @access public
*/
	public function log(){
		$this->cargarVista("login");
	}

/**
* Carga la vista "registropro del proyecto
*
* @access public
*/

	public function registrarPro(){
		$this->cargarVista("registroProducto");
	}
/**
* Carga la vista "Verpro" del proyecto
*
* @access public
*/
	public function verPro(){
		$this->cargarVista("verProducto");
	}

/**
* Carga la vista "pujar" del proyecto
*
* @access public
*/
	public function pujar(){
		$this->cargarVista("pujar");
	} 

/**
* Obtiene los valores del registro del usuario, carga el modelo cliente y ejecuta el metodo insertUsuario
* Estre metodo se encarga de registrar el usuario en la base de datos
* @access public
*/
	public function registrarUsuario(){
		if ($_POST) {
		$nombre =$_POST["nombre"];
		$apellido =$_POST["apellido"];
		$cedula=$_POST["cedula"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contraseña"];
		$aux=10;
		$modelo=$this->cargarModelo("Cliente");
		$result=$modelo->insertUsuario("usuario", ["nombre" => $nombre, 
			"apellido" => $apellido, "cedula" => $cedula,"direccion" => $direccion, 
			"correo" =>$correo, "contrasena" => $contraseña,"telefono" =>$telefono, "pujas" =>$aux]);
	}
	$this->cargarVista("index");
	}
/**
* Obtiene los valores del registro de la empresa, carga el modelo Empresa y ejecuta el metodo insertEmpresa
* Estre metodo se encarga de registrar una empresa en la base de datos
* @access public
*/
	public function registrarEmpresa(){
		if ($_POST) {
		$nombre =$_POST["nombre"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contraseña"];

		$modelo=$this->cargarModelo("Empresa");
		$result=$modelo->insertEmpresa("empresa", ["nombre" => $nombre,"telefono" =>$telefono
			,"direccion" => $direccion, "correo" =>$correo, "contrasena" => $contraseña]);
	}

	$this->cargarVista("index");
	}

/**
* Obtiene los valores del registro de el producto, carga el modelo Cliente y ejecuta el metodo insertUsuario
* Estre metodo se encarga de registrar un producto en la base de datos
* @access public
*/
	public function registrarProducto(){
		if ($_POST) {
		$nombre=$_POST["nombre"];
		$codigo=$_POST["codigo"];
		$precio=$_POST["precio"];
		$fechaF=$_POST["fechaF"];
		$fechaE=$_POST["fechaE"];
		$descri=$_POST["descri"];

		$modelo=$this->cargarModelo("Cliente");
		$result=$modelo->insertUsuario("producto", 
			["nombre" => $nombre,"codigo" => $codigo,"precio" => $precio,
			"fechaFinal" => $fechaF,"fechaEntrega" => $fechaE,"descripcion" => $descri]);
	}
	$this->cargarVista("index");
	}
	
	/**
* Obtiene los valores del login, carga el modelo Cliente, autentifica a el usuario 
* Estre metodo se encarga de realizar el login del usuario
* @access public
*/
	public function login(){
		$username=$_POST["usuario"];
		$pass=$_POST["contraseña"];
		$modelo = $this->cargarModelo("Cliente");
		$respuesta = $modelo->authenticate($pass,$username);

		$modeloE=$this->cargarModelo("Empresa");
		$respuestaE = $modeloE->authenticate($pass,$username);

		if($respuesta != null && $respuesta->rowCount()>0 || $respuestaE != null && $respuestaE->rowCount()>0)
		{
			setcookie("chsm","logedin",time()+3600,"/");
			header("location: /proyectoFinalphp");
			$this->cargarVista("index");
			exit();
		}
		else{
			echo "login fallido";
			$this->cargarVista("index");
		}
	}

	/**
* Estre metodo se encarga de realizar el logOut del usuario
* @access public
*/
	
	public function logout(){
		setcookie("chsm","",time()-3600, "/");
		header("location: /proyectoFinalphp");
		//$this->cargarVista("index");
	}
		
}
?>