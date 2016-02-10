<?php 

/**
*
* Autoload
* @author
* @package sys
*
**/
spl_autoload_register(null,false);//vacia las tablas de los autoloads
//ahora registraremos cada una de las funciones que vamos a registrar (una funcion de autoload por carpeta)
spl_autoload_register('Autoload::SysLoader');
spl_autoload_register('Autoload::ControllersLoader');
spl_autoload_register('Autoload::ModelsLoader');
spl_autoload_register('Autoload::ViewsLoader');

class Autoload{
	static function SysLoader($class){
		$filename=strtolower($class).'.php';
		$file=ROOT.'sys'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
		require $file;
	}

	static function ControllersLoader($class){
		$filename=strtolower($class).'.php';
		$file=APP.'controllers'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
		require $file;
	}

	static function ModelsLoader($class){
		$filename=strtolower($class).'.php';
		$file=APP.'models'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
		require $file;
	}

	static function ViewsLoader($class){
		$filename=strtolower($class).'.php';
		$file=APP.'views'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
		require $file;
	}
}

/**
*
* Coder
* makes var_dump easy
* @author Manuel Solé
*
**/
class Coder{
	static function code($var){
		echo '<pre>'.$var.'</pre>';
	}

	static function codear($var){
		echo '<pre>'.var_dump($var).'<pre>';
	}
}

?>