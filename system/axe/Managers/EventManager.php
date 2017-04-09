<?php

namespace App\Managers;

use Blade\Events\EventManager as Manager;
use Blade\Interfaces\AxE\AxE;

class EventManager extends Manager
{
	
	public $events = [
		//Some events
	];

	function run(AxE $axe)
	{

		parent::run($axe);
		
	}
}
