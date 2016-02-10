<?php

/**
*
* Request
* @author Manuel Solé
* @package sys
*
**/
class Request{
	static private $query=array();

	static function retrieve(){
		$array_query=explode('/',$_SERVER['REQUEST_URI']);
		
		array_shift($array_query);//quita un elemento por delante, que en nuestro caso es el primer espacio en blanco
		//array_pop($array_query);//quita un elemento por detras
		//var_dump($array_query);

		//if we publish in root
		if($array_query[0]==APP_W){
			array_shift($array_query);
		}

		//deleting blanks at the end
		if(end($array_query)==""){
			array_pop($array_query);
		}

		//return value to starti $query
		self::$query=$array_query;
	}

	static function getCont(){
		$res='';
		if (count(self::$query)>0){
			$res=self::$query[0];
			array_shift(self::$query);
		}
		return $res;
	}
	
	static function getAct(){
		$res='';
		if (count(self::$query)>0){
			$res=self::$query[0];
			array_shift(self::$query);
		}
		return $res;
	}

	static function getParams(){
		
		if (count(self::$query)>0 && count(self::$query)%2==0){
			//si es par puedo obtener los parametros
			$res=array();
			do{
				$res+=array(self::$query[0]=>self::$query[1]);
				//array_merge($res, array(self::$query[0]=>self::$query[1]));
				//array_push ($res,array(self::$query[0]=>self::$query[1]));
				array_shift(self::$query);
				array_shift(self::$query);
			}while(count(self::$query)>0);
			
			return $res;

		}else{
			//throw new Exception("****** Error al obtener parametros, los parametros no son pares ******", 1);
		}
	}
}

?>