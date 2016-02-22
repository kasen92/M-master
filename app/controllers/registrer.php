<?php
	
class Register extends Controller{
	protected $model;
	protected $view;
	
	function __construct($params){
		parent::__construct($params);
		$this->model=new mRegister();
		$this->view=new vRegister(null);
	}

	function home(){

	}
	
	function registro(){
		if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
			$usuario=filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
			$contrasena=filter_input(INPUT_POST, 'contrasena', FILTER_SANITIZE_STRING);
			// $contrasena=md5(filter_input(INPUT_POST, 'contrasena', FILTER_SANITIZE_STRING)); 
			
			$existeUsuario=$this->model->comprobarNombre($usuario);
			if(!$existeUsuario){
				$user=$this->model->registro($usuario,$contrasena,2);
				if($user=='00000'){
					//ErrorCode no devuelve ningun error
					Session::set('islogged',TRUE);
       				Session::set('nombre',$nombre);
       				$output=array('registro'=>true);
				}else{
					$output=array('registro'=>false);
					$output+=array('msg'=>'Error al insertar el usuarioe en la base de datos');
				}
			}else{
				$output=array('registro'=>false);
				$output+=array('msg'=>'El nombre de usuario ya esta en uso');
			}

			$output+=array('redirect'=>APP_W);
			$this->ajax_set($output);
		}
	}

}