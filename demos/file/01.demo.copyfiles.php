<?php

require '../autoload.php';

spl_autoload_register('autoload_classes');

use Libs\File\File;

$source = '../../assets/files/file1.txt';
$target = '../../assets/copy_files';

try {
	File::fullCopy($source, $target);
	echo 'Copia realizada';
} catch(Exception $e) {
	die($e->getMessage());
}
