<?php
class Controller_services extends Controller
{
	function action_index()
	{	
		$this->view->construct('services_view.php', 'template_view.php');
	}
}
?>