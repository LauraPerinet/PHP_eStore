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
						'password' => md5($user->get_password()),
						'admin' => $user->is_admin()
					)
				);
				
		}catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}
	}
	
	public function findOne($email, $password){
		$select = 'SELECT * FROM users where email=\''.$email.'\' and password=\''.md5($password).'\'';
		$search = $this->bdd->query($select);
		$found=$search->fetch();
		
		return $found;
		$search->closeCursor();
		
	
	}
	public function findAll($col){
		$select = 'SELECT '.$col.' from users';
		$search=$this->bdd->query($select);
		return $search;
	}
	public function update($id, $col, $newValue){
		try{
			$query = 'UPDATE users SET '.$col.'="'.$newValue.'" WHERE id='.$id;
	
			$update = $this ->bdd->exec($query);
		}catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}
		
	}
	public function deleteUser($id){
		echo '<br/>on supprime id ='.$id.'<br/>';
		try{
			$del = 'DELETE FROM users WHERE id='.$id;
			$delete = $this->bdd->exec($del);
			
		}catch(Exception $e){
			die('Erreur : '.$e->getMessage());
		}
	}
	

}