<?php
class Controller {
	
	public $data;
	public $model; 
	public $view;
	
	public function __construct()
	{
		$this->view = new View();
	}
	
	function action_index()
	{
	}
}
?>