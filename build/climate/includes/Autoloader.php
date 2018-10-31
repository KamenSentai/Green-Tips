<?php

namespace Climate;

class Autoloader {
    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

	static function autoload($class) {
		$file = explode('\\', $class)[sizeof(explode('\\', $class)) - 1];

		if (file_exists(__DIR__ . '/models/' . $file . '.php'))
			require __DIR__ . '/models/' . $file . '.php';

		elseif (file_exists(__DIR__ . '/views/' . $file . '.php'))
			require __DIR__ . '/views/' . $file . '.php';

		elseif (file_exists(__DIR__ . '/controllers/' . $file . '.php'))
			require __DIR__ . '/controllers/' . $file . '.php';

		else
			die('Class ' . $class . ' not found');
	}
}