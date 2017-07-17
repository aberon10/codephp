<?php

require '../autoload.php';

spl_autoload_register('autoload_classes');

use Libs\File\File;

$files = [
	'../../assets/copy_files/file1.txt',
	'../../assets/files/file1.txt'
];

try {
	File::removeFiles($files);
	echo 'Ficheros eliminados con exito.';
} catch (Exception $e) {
	die($e->getMessage());
}
