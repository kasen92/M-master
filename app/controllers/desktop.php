<?php 

class Desktop extends Controller{
	protected $model;
	protected $view;
	
	function __construct($params){
		parent::__construct($params);
		$this->model=new mDesktop();
		$this->view= new vDesktop(array('nombre'=>Session::get('nombre')));
		
		//echo 'Hello controller!';
	}
	function desktop(){
		//Coder::codear($this->conf);
	}
}