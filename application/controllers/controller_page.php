<?php
class Controller_All_Page extends Controller 
{
		function About_Controller_Page () 
		{
			$this->view->them('about_view.php', 'template_view.php');
		}

		function Blog_Controller_Page () 
		{
			$this->view->them('blog_view.php', 'template_view.php');
		}

		function Contact_Controller_Page () 
		{
			$this->view->them('contact_view.php', 'template_view.php');
		}

		function Main_Controller_Page () 
		{
			$this->view->them('main_view.php', 'template_view.php');
		}

		function Portfolio_Controller_Page () 
		{
			$this->view->them('portfolio_view.php', 'template_view.php');
		}

		function Services_Controller_Page () 
		{
			$this->view->them('services_view.php', 'template_view.php');
		}
}