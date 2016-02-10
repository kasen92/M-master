<?php 

/**
*
* Core
* @author
* @package sys
*
**/
class Controller{
	protected $params;
	protected $model;
	protected $view;

	function __construct($params){
		$this->params=$params;
	}
}

?>