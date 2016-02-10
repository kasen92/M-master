<?php 

/**
*
* Core
* @author 
* @package sys
*
**/
class Core{
	static private $controller;
	static private $action;
	static private $params;

	static function init(){
		//echo 'CORE arrenca app'
		//recuperar to request
		//echo $_SERVER['REQUEST_URI'];
		Request::retrieve();
		$controller=Request::getCont();
		$action=Request::getAct();
		$params=Request::getParams();
		
		//mostramos los datos
		/*coder::code($controller);
		coder::code($action);
		coder::codear($params);*/
		
		//router
		self::$controller=$controller;
		self::$action=$action;
		self::$params=$params;
		self::router();
	}

	static function router(){
		/*echo 'Routing...';
		coder::code(self::$controller);
		coder::code(self::$action);*/
		
		//if exists the controller then
		//make an instance of controller
		//comprobamos si nos han pasado los datos del controlador, accion  y parametros
		//en caso contrario pondremos valores por defecto
		$controlCall=(self::$controller!="")?self::$controller:'home';//if agrupado
		$actionCall=(self::$action!="")?self::$action:'home';
		$paramsCall=(self::$params!=null)?self::$params:array('default'=>'default');

		//comprobamos si existe el fichero del controlador
		$filename=$controlCall.'.php';
		$filecontroller=APP.'controllers'.DS.$filename;
		if (is_readable($filecontroller)){
			$cont=new $controlCall($paramsCall);
			//comprobamos si exite la funcion que llama la accion dentro del objeto $cont (controlador)
			if (is_callable(array($cont,$actionCall))){
				//llamamos a la funcion pasando un array del objeto y la funcion
				call_user_func(array($cont,$actionCall));
			}else{
				//no function
				echo 'No action!';
			}
		}else{
			//no controller
			echo 'No controller!';
		}
	}
}

?>