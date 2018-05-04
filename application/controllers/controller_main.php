<?php
class Controller_Main extends Controller
{
	function action_index()
	{	
		$this->view->construct('main_view.php', 'template_view.php');
	}
}
?>