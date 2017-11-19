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
	public function update($col, $newValue){
		$this->$col=$newValue;
	}
	
	public function check_if_unique(array $list_emails){
		$unique=true;
		for($i=0;$i<count($list_emails); $i++){
			echo $list_emails[$i]['email'];
			if($this->email == $list_emails[$i]['email']){
				$unique=false;
				break;
			}
		}
		echo '<br/>'.$unique.'<br/>';
		return $unique;
	}
	public function disconnect(){
		unset($this);
	}
	public function get_email(){
			return $this->email;
	}
	public function get_id(){
			return $this->id;
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