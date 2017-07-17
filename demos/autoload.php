<?php

/**
 * autoload_classes
 * @param string $classname
 */
function autoload_classes($classname)
{
    $filename = '../../'.str_replace('\\', '/', $classname).'.php';
    if (file_exists($filename)) {
        require_once $filename;
    }
}
