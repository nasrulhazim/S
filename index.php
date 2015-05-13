<?php
try {
	header("Access-Control-Allow-Origin: *");
	require 'vendor/autoload.php';
	require 'config/definitions.php';
	require 'config/initialize.php';
} catch (Exception $e) {
	echo 'Unable to start up the S. ' . $e->getMessage();
}