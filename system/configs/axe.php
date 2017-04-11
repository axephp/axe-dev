<?php

return[
	
	'managers'=>[

		Blade\Managers\RouteManager::class

	],

	'aliases'=>[
		'db' => \Blade\Database\Database::class,

		'auth'	=> \Blade\Auth\Auth::class,

		'hash' => \Blade\Hash\Hasher::class
	],

	'libs'=>[
	
		'db',

		'session',

		'config',

		'logs',

		'events',

		'auth'

		#\Blade\XXXX\XXX::class,

		# 'alias' => \Blade\YYYY\YYYY:class

	]



];