<?php
class Controller_Admin extends Controller
{
	public $model;
	public $result;
	public $data;

	public function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}


	// Отправка данных формы в админ. модель
	function action_index()
	{	
		$url = $_POST['url'];
		$content = $_POST['content'];
		if (!empty($url) and !empty($content)) {
			$this->model->push_data_base("$url", "$content");
		}


		$this->view->construct('admin_view.php', 'admint_view.php', "$ModelResult");
	}
	
	public function model_result($result) 
	{
		$this->data = $result;
	}
}
