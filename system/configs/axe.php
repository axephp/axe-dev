<?php

return[
	
	'managers'=>[

		Blade\Managers\RouteManager::class

	],

	'aliases'=>[
		'db' => \Blade\Database\Database::class
	],

	'libs'=>[
	
		'db',

		'session',

		'config',

		'route',

		'logs',

		'events',

		#\Blade\XXXX\XXX::class,

		# 'alias' => \Blade\YYYY\YYYY:class

	]



];