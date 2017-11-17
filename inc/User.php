<?php
class User {
	private $id;
	private $email;
	private $password;
	private $firstName;
	private $lastName;
	private $address;
	private $postalCode;
	private $city;
	private $admin;
	
	public function __construct(){
		
	}
	public function hydrate(array $data){
		foreach($data as $key=>$value){
				echo $key.' = '.$value.'<br/>';
				$this->$key=$value;
			}
	}
	public function get_email(){
			return $this->email;
	}
	public function get_lastName(){
			return $this->lastName;
	}
	public function get_firstName(){
			return $this->firstName;
	}
	public function get_postalCode(){
			return $this->postalCode;
	}
	public function get_address(){
			return $this->address;
	}
	public function get_password(){
			return $this->password;
	}
	public function get_city(){
			return $this->city;
	}
	public function is_admin(){
			return $this->admin;
	}
	public function set_id($id){
		$this->id=$id;
	}
}