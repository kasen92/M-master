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
	function login(){			
		if(isset($_POST['usuario'])){
			$usuario=filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
			$contrasena=filter_input(INPUT_POST, 'contrasena', FILTER_SANITIZE_STRING);
			// $contrasena=md5(filter_input(INPUT_POST, 'contrasena', FILTER_SANITIZE_STRING)); 
			$user=$this->model->login($usuario,$contrasena);
			if ($user==TRUE){
				Session::set('islogged',TRUE);
       			Session::set('nombre',$usuario);
				$output=array('redirect'=>APP_W);
				$this->ajax_set($output);
			}else{ 
				Session::set('islogged',False);
				Session::set('nombre',"");
				$output=array('redirect'=>APP_W.'register');
				$this->ajax_set($output);
			}
		}
	}

	function desconectar(){
		Session::set('islogged',False);
		Session::set('nombre',"");
		header('Location: home');
	}
	
}

?>