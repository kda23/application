<?php
class Controller_Article extends Controller
{
	function action_index()
	{
		$this->view->construct('article_view.php', 'template_view.php');
	}
}
?>