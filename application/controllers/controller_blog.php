<?php
class Controller_Blog extends Controller
{
	public $data;
	public $view;

	public function __construct()
	{
		$this->view = new View();
	}

	function model_result($result) 
	{
		$this->data = $result;
		//var_dump($this->data);
		$this->action_data();
	}

	function action_data()
	{	
		$this->view->construct('blog_view.php', 'template_view.php', $this->data);
	}
}
?>