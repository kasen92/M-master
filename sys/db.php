<?php

	class DB extends PDO{
		
			static $_instance;

			public function __construct()
			{//recuperar dades configuració de Config.json
					$config=Registry::getInstance();
				
				$dbconf=(array)$config->dbconf;
				$dsn=$dbconf['driver'];

			try{
				//parent::__construct($dsn,$usr,$pwd);
				parent::__construct($config->driver.':host=' . $config->dbhost . ';dbname=' .$config->dbname,$config->dbuser, $config->dbpass);
			}catch(PDOexception $e){
				echo $e->getMessage();
			}


		}
		
		static function singleton(){
			if(!(self::$_instance instanceof self)){
				self::$_instance=new self();
			}
			return self::$_instance;
		}
	}


 ?>