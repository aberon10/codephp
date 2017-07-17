<?php

require '../autoload.php';

spl_autoload_register('autoload_classes');

use Libs\File\File;

define('PROJECT_PATH', dirname(__DIR__));

$dir = '/var/www/html';

try {
	File::find($dir, 'php', false); // búsqueda por extensión
	echo '<pre>';
	var_dump(File::$results);
	echo '</pre>';
} catch (Exception $e) {
	die($e->getMessage());
}


