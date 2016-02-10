<?php 

/**
*
* Core
* @author 
* @package app/controllers
*
**/
class Home extends Controller{
	function __construct($params){
		parent::__construct($params);
		$this->model=new mHome();
		$this->view=new vHome($this->model->getData());
	}

	function home(){
		//echo 'I\'m function home in controller home!';
	}
}

?>