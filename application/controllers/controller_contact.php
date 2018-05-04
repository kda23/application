<?php
class Controller_contact extends Controller
{
	function action_index()
	{	
		$this->view->construct('contact_view.php', 'template_view.php');
	}
}
?>