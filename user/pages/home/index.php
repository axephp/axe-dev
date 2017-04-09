<?php

namespace User\Pages;

use Blade\View\Types;

use User\Models;
use User\Middlewares;

use App\Framework\Framework;
use App\Framework\Page;

class Home extends Framework implements Page
{

	/**
	 *  Route middlewares for this page
	 */
	protected $middlewares = [
	];

	public $title = "Home Page | AxE";

	/**
	 *  Gets called on GET request to this page
	 */
	public function index_get($args)
	{

		// Loading of CSS file from public_html folder
		cssFromPublic('css/main.css');
		// Loading of CSS file from page directory
		css('welcome.css');

		return view('welcome');

	}

}
