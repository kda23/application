<?php
class Controller_about extends Controller
{
	function action_index()
	{	
		$this->view->construct('about_view.php', 'template_view.php');
	}
}
?>