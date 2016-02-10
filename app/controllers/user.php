<?php
		
		class User extends Controller{
			protected $model;
			protected $views;

			function __construct($params){
				parent::__construct($params);
				$this->model=new mHome();
				$this->view= new vHome();
			}
			function home(){
				
			}
		}