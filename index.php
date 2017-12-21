<?php
session_start();

require_once("model/Connection.php");
$conn=new Connection();
$db = $conn->get_connection();

if (
	( isset($_GET['ctrl']) && !empty($_GET['ctrl']) ) &&
	( isset($_GET['action']) && !empty($_GET['action']) )
) {

    $ctrl = $_GET['ctrl'];
    $action = $_GET['action'];
}
else {
	
    $ctrl = 'category';
    $action = 'display';
}
if(!file_exists('./controller/' . $ctrl  . 'Controller.php')){
	$ctrl = 'category';
    $action = 'display';
}
require_once('./controller/' . $ctrl  . 'Controller.php');

$ctrl = $ctrl . 'Controller';
$controller = $ctrl::getInstance($db);
if(!method_exists ( $controller , $action )){
	$action="notFound";
} 
$controller->$action();

	