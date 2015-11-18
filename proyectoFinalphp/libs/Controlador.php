<?php

/**
* Esta clase es la libreria controlador, contiene los metodos mas generales que todo controlador contendra 
* Implemente los metodos, como cargar modelo, cargar vista
*
* @author Juan Jose Perdomo Forero
* @author Andres feliPe Perdomo Forero
*
* @package Libs
*/

class Controlador{

	/**
* array de parametros
* @var array parametros
* @access private
*/
	
	private $parametros;

/**
* Se encarga de cargar el modelo deseaso
* @param String cadena de parametros
* @access protected
*/
	protected function cargarModelo($modelo){

		$modelo = ucfirst(strtolower($modelo));
		$urlFile = 'modelos/'.$modelo.'.php';

		if(file_exists($urlFile)){

			include $urlFile;

			$class=$modelo;

			$model= new $class();

			return $model;
		}else{
			return null;
		}
	}

/**
* Se encarga de cargar la vista deseada
* @param String vista
* @access protected
*/
	protected function cargarVista($vista){

		$vista = ucfirst(strtolower($vista));
		$urlFile = 'vistas/'.$vista.'.php';

		if(file_exists($urlFile)){

			require_once($urlFile);
			return true;
		}else{
			return false;
		}
	}

/**
* Se encarga de realizar el set  de los parametros
* @param Array parametros
* @access public
*/

	public function setParams($parametros){
		$this->parametros = $parametros;
	}
/**
* Se encarga de realizar el get de los parametros
* @param Array parametros
* @access public
*/
	public function getParametros(){
	return $this->params;
	}
}

?>