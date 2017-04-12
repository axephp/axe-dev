<?php

return[
	
	'managers'=>[

		Blade\Managers\RouteManager::class

	],

	'aliases'=>[
		'db' => \Blade\Database\Database::class,

		'hash' => \Blade\Hash\Hasher::class
	],

	'libs'=>[
	
		'db',

		'session',

		'config',

		'logs',

		'events',

		'auth',

	]



];