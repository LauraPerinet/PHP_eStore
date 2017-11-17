<?php
include_once("inc/db/param.inc.db.php");

	require("inc/Connection.php");
	require("inc/User.php");
	require("inc/UserManager.php");
	$conn=new Connection();
	$bdd = $conn->get_connection();

	$user =new User();
	
	
	$userManager =new UserManager($bdd);
	//$userManager->create($user);
	$laura=$userManager->findOne("lpmarquet@gmail.com", "laura");
	
	$user->hydrate($laura);
	var_dump($user);
	$allUsers=$userManager->findAll();
	while($one=$allUsers->fetch()){
		echo $one['firstName'].' '.$one['lastName'].' <br/>';
	}
	?>
	