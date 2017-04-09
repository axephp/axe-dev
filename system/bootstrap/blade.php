<?php
/**
 * AxE PHP - Slash your code
 * Copyright (c) 2016, AxE PHP
 *
 *
 * @author AxE Development Team
 * @copyright Copyright (c) 2016, AxE PHP
 * @license MIT License
 * @version 2.0
 *
 * Recommended PHP version 5.6 or greater.
 */


use Blade\AxE\AxE;


/**
 *  Application Handler
 **/

class Application
{
	
	/**
	*  Main execution work
	*/
	public function slash($rootPath)
	{
		$axe = new AxE($rootPath);
		
		$axe->register(Blade\Interfaces\AxE\AxE::class, AxE::class, true);
		$axe->map(Blade\Interfaces\AxE\AxE::class, $axe);
		$axe->register(Blade\Interfaces\Routing\Router::class, Blade\Routing\Router::class, true);
		$axe->register(Blade\Interfaces\Routing\Processor\Processor::class, Blade\Routing\Processor\Processor::class, true);

		$kernel = $axe->resolve(Blade\Kernel\Kernel::class);

		$response = $kernel->boot($request = Blade\Http\Request::request());		
		
		$response->send();

		$kernel->end($request, $response);

	}

}

return new Application;
