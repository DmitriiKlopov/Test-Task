<?php
class Controller_detail extends Controller
{
	function action_index()
	{	
		$this->view->name = 'detail';
		$this->view->generate();
	}
}
?>