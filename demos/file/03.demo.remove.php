<?php
require '../autoload.php';

spl_autoload_register('autoload_classes');

use Libs\File\File;

$entry = '../../assets/files/file2.txt';

try {
	File::remove($entry);
	echo 'Archivo/Directorio eliminado con exito.';
} catch (Exception $e) {
	die($e->getMessage());
}
