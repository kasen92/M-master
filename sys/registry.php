<?php 

/**
*
* Registry
* Stores navegation information
* @author 
* @package sys
*
**/
class Registry{
	private $data=array();
	static $instance;
	
	//singleton instance (una unica instancia para evitar problemas de duplicidad de instancias)
	public static function getInstance(){
		if(!(self::$instance instanceof self)){
			//there is no instance
			self::$instance=new self();
		}
		return self::$instance;
	}

	function __construct(){
		$this->data=array();
		$this->loadConf();
	}

	function __set($key,$value){
		if(!array_key_exists($key, $this->data)){
			//$this->data = array_merge($this->data, array($key => $value));	
			$this->data[$key]=$value;
		}
	}

	function __get($key){
		if(array_key_exists($key, $this->data)){
			return $this->data[$key];	
		}else{
			return null;
		}	
	}

	function loadConf(){
		$file=APP.'config.json';
		$jsonStr=file_get_contents($file);//volcamos el fichero a la variable string
		$arrayJson=json_decode($jsonStr);//generamos un array asociativo con los datos del string
		//recorremos el array y lo guardamos en el array data de la clase
		foreach ($arrayJson as $key => $value){
			$this->data[$key]=$value;
		}
	}

	function delete($key=null){
		if($key===null){
			unset($this->data);
		}else{
			unset($this->data[$key]);
		}
	}

}

?>