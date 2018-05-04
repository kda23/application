<?php
class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	function construct($content_view, $template_view, $data)
	{
		/*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
		var_dump($data);
		include 'application/views/'.$template_view;
	}
}
?>