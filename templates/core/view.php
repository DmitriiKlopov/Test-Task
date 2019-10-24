<?php
class View
{
	
	public $template_vws = 'template_vws.php';
	public $name;
	public $data;
	
	function generate()
	{
		
		include 'app/views/'.$this->template_vws;
	}
}
?>