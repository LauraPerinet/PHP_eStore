<?php
// Questions : 
/* Comment appeler une classe dans une déclaration de classe ? Comment "ranger" index.php ? 
Comment fonctionne prepare et execute ? Est-ce qu'on doit faire ça que pour les inserts ou pour tous les appels à la bdd ?
QU'est ce qu'on met dans un constructeur ?
		
*/

include_once("inc/db/param.inc.db.php");

	require("inc/Connection.php");
	require("inc/User.php");
	require("inc/UserManager.php");
	$conn=new Connection();
	$bdd = $conn->get_connection();
	$userManager =new UserManager($bdd);
	
	$user =new User();
	
	$data=array(
	"email"=>"toto3@toto.fr", "lastName"=>"Toto", "firstName"=>"Torototo", "address"=>"35, rue de Toto", "city"=>"Totoville", "postalCode"=>"10001", "password"=>"toto", "admin"=>0);
	$user->hydrate($data);
	
	
	if( $user -> check_if_unique( $userManager -> findAll('email')->fetchAll() )){
		$userManager->create($user);
		$user->set_id($userManager->findOne($user->get_email(), $user->get_password())['id']);
		echo $user->get_lastName();
	}else{
		echo 'Cet email est déjà enregistré. Merci de vous connecter à votre compte ou de rentrer un autre email.';
	}
	
	$user->update('lastName', 'titi');
	$userManager->update($user->get_id(), 'lastName', 'titi');
	
	$userManager -> deleteUser($user->get_id());
	$user->disconnect();
	$user->get_lastName();
	
	//$user->hydrate($laura);
	$allUsers=$userManager->findAll('lastName firstName');
	while($one=$allUsers->fetch()){
		echo $one['firstName'].' '.$one['lastName'].' <br/>';
	}
	?>
	