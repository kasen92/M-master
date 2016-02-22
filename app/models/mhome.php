<?php

/**
* Modelo mHome
*
* Este modelo se comunica con la base de datos para hacer los inserts de usuarios.
*/


class mHome extends Model{

	function __construct(){
		parent::__construct();
		
	}

	function login($usuario,$contrasena){
		try{
			$sql="SELECT id FROM usuarios WHERE nombre=? AND contrasena=?";
			$this->Query($sql);
			$this->Bind(1,$usuario);
			$this->Bind(2,$contrasena);
			$this->Execute();
			if($this->RowCount()==1){
				return TRUE;
			}else{
				return FALSE;
			}
		}catch(PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}


?>