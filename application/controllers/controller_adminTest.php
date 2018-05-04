<?php
class Controller_Admin
{
	//function __construct()
	//{
	//	$this->model = new Model();
	//	$this->view = new View();
	//}

	function action_index()
	{	
		$url = $_POST['url'];
		$content = $_POST['content'];
		var_dump($url);
		var_dump($content);
		//$data = $this->model->get_data($this->url, $this->content);
		//$this->view->construct('admin_view.php', 'admint_view.php', $data);
	}
}

$obj = new Controller_Admin;
$obj->action_index()
?>