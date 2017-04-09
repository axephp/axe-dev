<?php

return[
	
	'managers'=>[

		Blade\Managers\RouteManager::class

	],

	'aliases'=>[
		'db' => \Blade\Database\Database::class,

		'session' => \Blade\Session\Session::class
	],

	'libs'=>[
	
		'db',

		'session',

		'config',

		'current',

		'logs',

		'events',

		#\Blade\XXXX\XXX::class,

		# 'alias' => \Blade\YYYY\YYYY:class

	]



];