<?php
header('Content-type: text/css; charset=UTF-8');
$directory = realpath(dirname(__FILE__));
$cssFilesLib = glob($directory . '/theme/*.css');
$cssFiles = glob($directory . '/*.css');

foreach ($cssFilesLib as $fileLib) {
	include($fileLib);
}

foreach ($cssFiles as $file) {
	include($file);
}

ob_end_flush();
die();