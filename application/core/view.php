<?php
class View
{
	//public $template_view; // ����� ����� ������� ����� ��� �� ���������.
	
	function construct($content_view, $template_view, $data)
	{
		/*
		if(is_array($data)) {
			// ����������� �������� ������� � ����������
			extract($data);
		}
		*/
		var_dump($data);
		include 'application/views/'.$template_view;
	}
}
?>