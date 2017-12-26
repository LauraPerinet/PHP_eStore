<?php

header("Content-Type: text/plain"); 

$add = (isset($_GET["add"])) ? $_GET["add"] : NULL;
$id = (isset($_GET["prod"])) ? $_GET["prod"] : NULL;

if ($add && $id) {
	require_once('../controller/ProductController.php');
	$prod=ProductController::getInstance($db)->findOne($id);
	var_dump($prod);
} else {
	echo "FAIL";
}

?>