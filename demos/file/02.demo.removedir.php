<?php
require '../autoload.php';

spl_autoload_register('autoload_classes');

use Libs\File\File;

$dir = '../../assets/copy_files';

try {
	File::removeDir($dir, false);
	echo 'Directorio eliminado';
} catch (Exception $e) {
	die($e->getMessage());
}
