<?php

class Route
{
	static function start()
	{
		// старт 
		session_start();
		
		// контроллер 
		$controller_name = 'Main';
		$action_name = 'index';
		
		$url = explode('?',$_SERVER['REQUEST_URI'])[0];
		$routes = explode('/', $url);
		// + имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		// + имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}
		// + префиксы
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		// +/- файл с классом модели 
		$model_file = strtolower($model_name).'.php';
		$model_path = "app/models/".$model_file;
		if(file_exists($model_path))
		{
			include "app/models/".$model_file;
		}
		// + файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "app/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "app/controllers/".$controller_file;
		}
		else
		{
			Route::ErrorPage404();
		}
		
		// новый контроллер
		$controller = new $controller_name();
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// + действие контроллера
			$controller->$action();
		}
		else
		{
			Route::ErrorPage404();
		}
	
	}
	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
    
}
?>