<?php

class UserManager{
	private $bdd;
	
	public function __construct($bdd){
		$this->bdd=$bdd;	
	}
	
	public function create($user){
		try{
			$req = $this->bdd->prepare(
				'INSERT INTO users ( lastName, firstName, email, address, postalCode, city, password, admin ) VALUES ( :lastName, :firstName, :email, :address, :postalCode, :city, :password, :admin )'
				);

				$req->execute(
					array(
						'lastName' => $user->get_lastName(),
						'firstName' => $user->get_firstName(),
						'email' => $user->get_email(),
						'address' => $user->get_address(),
						'postalCode' => $user->get_postalCode(),
						'city' => $user->get_city(),
						'password' => $user->get_password(),
						'admin' => $user->is_admin()
					)
				);
			echo 'user créé';
		}catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}
	}
	
	public function findOne($email, $password){
		$select = 'SELECT * FROM users where email=\''.$email.'\' and password=\''.$password.'\'';
		$search = $this->bdd->query($select);
		$found=$search->fetch();
		return $found;
		$search->closeCursor();
	
	}
	public function findAll(){
		$select = 'SELECT lastName firstName from users';
		$search=$this->bdd->query($select);
		return $search;
	}
	

}