<?php

namespace User\Models;

class Welcome
{
	
	function __construct()
	{
		// Nothing to construct
	}

	public function quote()
	{
		$quotes = [
			'Turn your ideas into reality instantly!',
			'It\'s never too late to try AxE!',
			'Discover the essence of a beautiful framework!',
			'Love the way you code!',
			'If Einstein were alive, he would use AxE Framework!'
		];

		return array_random($quotes);
	}
}