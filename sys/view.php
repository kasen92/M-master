<?php 

class View{
	protected $template;
	protected $array_app;
	
	function __construct($array_app){
		//$this->array_app=array('logo'=>'logo.png','titol'=>'HOME');
		$this->array_app=$array_app;
	}
}

?>