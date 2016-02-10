<?php 

class vHome extends View{
	
	function __construct($array_app){
		parent::__construct($array_app);
		$this->template=Template::load('home',$this->array_app);
	}
}
	
?>