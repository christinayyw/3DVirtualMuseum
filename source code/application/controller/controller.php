<?php

class Controller{
	public $load;
	public $model;
	
	function __construct($pageURI = null)
	{
		$this->load = new Load();
		$this->model = new Model();
		
		$this->$pageURI();
		
		
	}
	
	function home(){
	$data = $this->model->car_info();
	$this->load->view('home',$data);
	}
	
	function gallery(){
	$data = $this->model->car_info();
	$this->load->view('gallery',$data);
	}
	
	function admin(){
	$data = $this->model->car_info();
	$this->load->view('admin',$data);
	}
	function about(){
			$data = $this->model->car_info();

	$this->load->view('about',$data);
	}

	function json(){
		$data = $this -> model->dbGetJson();
	$this->load->view('view_simple_message',$data);

	}
	
	
	function dbCreateTable(){
	echo "create 123";
	$data = $this -> model->dbCreateTable();
	$this->load->view('view_simple_message',$data);
	}
	
	
	function dbInsertData(){
	$data = $this -> model->dbInsertData();
	$this->load->view('view_simple_message',$data);
	}
	
	function dbGetData(){
	
	
	$data = $this -> model->dbGetData();
	$this->load->view('dbView',$data);
	}
	
	function dbDelete()
	{
			$data = $this -> model->dbDelete();
	$this->load->view('view_simple_message',$data);

	}
	
	function getFlickrFeed(){
		$this->load->view('getFlickrFeed');
	}
	
	function readjson()
	{
		$this->load->view('readjson');
	}
}


?>