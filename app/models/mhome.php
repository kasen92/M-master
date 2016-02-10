<?php

/**
* Modelo mHome
*
* Este modelo se comunica con la base de datos para hacer los inserts de usuarios.
*/

    class mHome {
        private $data=array();
        public function __construct() {
            $this->data=array('logo'=>'logoHome.png','titol'=>'HOME');
        }

        public function getData(){
            return $this->data;
        }
    }

?>