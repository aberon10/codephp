<?php
require '../autoload.php';

spl_autoload_register('autoload_classes');

use Libs\File\File;

$source = '../../assets/files/file2.txt';
$target = '../../assets/move_files';

try {
	File::move($source, $target);
	echo 'Ficheros movidos con exito.';
} catch (Exception $e) {
	die($e->getMessage());
}
