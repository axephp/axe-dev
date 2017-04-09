<?php

namespace App\Framework;

use Blade\AxE\Framework\Controller;

class Framework extends Controller
{

	public $title = "AxE Page";


	public function prepare($route, $action, $content = "")
	{	

		$folder = $route->getPath();

		$outputBag = [
			'title'=> $this->title,
		 	'dir'=>$folder,
		 	'bag'=>$this->loadBag, 
		 	'vars'=>$this->vars, 
		 	'action'=>$action,
		 	'content'=>$content
		 ];

		return $outputBag;
	}
	
}

