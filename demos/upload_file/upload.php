<?php

require '../autoload.php';

spl_autoload_register('autoload_classes');

use Libs\UploadFile\UploadFile;
use Libs\UploadFile\UploadFileException;

try {	
	UploadFile::setUploadMaxFileSize('10M');
	UploadFile::$destination = 'imágenes';
	UploadFile::$mimes = ['text/plain', 'image/jpeg'];
	UploadFile::upload('files');

	echo 'Archivo subido con éxito';
} catch (\Exception $e) {
	die($e->getMessage());
} catch (UploadFileException $e) {
	die($e->getMessage());
}

