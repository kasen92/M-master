<?php

class mRegister extends Model{

	function __construct(){
		parent::__construct();
		
	}
	
	function registro($nombre, $contrasena, $rol){
		try{
			// $this->Query("INSERT INTO usuarios (nombre, contrasena, rol) VALUES (?,?,?)");
			$this->Query("CALL sp_new_user(?,?,?)");
			$this->Bind(1,$nombre);
			$this->Bind(2,$contrasena);
			$this->Bind(3,$rol);
			$this->Execute();
			return $this->errorCode();
		}catch(PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}

	function comprobarNombre($nombre){
		try{
			$this->Query("SELECT id FROM usuarios where nombre=?");
			$this->Bind(1,$nombre);
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

}
