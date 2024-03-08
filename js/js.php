<?php
header('Content-type: application/javascript; charset=UTF-8');

$directory = realpath(dirname(__FILE__));
$files = glob($directory . '/*.js');

foreach ($files as $file) {
	include($file);
}

ob_end_flush();
die();
?>