<?php
class userController {

	private $userManager;
	private $user;
	private static $_instance;

    private function __construct($db1) {

		require('./model/User.php');
		require_once('./model/UserManager.php');
		$this->userManager = new UserManager($db1);
    }
	public static function getInstance ($db) {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self($db);

        return self::$_instance;
    }

    public function login() {
        $page = 'login';
        require('./view/main.php');
    }
	
	public function doLogin(){
		if(isset($_POST['email']) && $_POST['email']!=""){
			if(isset($_POST['password']) && $_POST['password']!=""){

				$userData = $this->userManager->findOne($_POST['email'], $_POST['password']);

				if(gettype($userData)=='array'){
					$_SESSION['user']=$userData;
					$this->user = new User();
					$this->user->hydrate($userData);
					$loc='index.php?ctrl=category&action=display';
				}else{
					$loc='index.php?ctrl=user&action=login&error=wrong';
				}
			}else{
				$loc='index.php?ctrl=user&action=login&error=empty&field=password';
			}
		}else{
			$loc='index.php?ctrl=user&action=login&error=empty&field=email';
		}
		header('Location:'.$loc);

	}
	
	public function logout(){
		session_destroy();
		header('Location:index.php');
	}
	public function create(){
		$page = 'createUser';
        require('./view/main.php');
	}
	public function doCreate(){
		$data=$this->test_fields();

		if($data && $_POST['password']!=""){
			$data['admin']=0;
			$user=$this->user=new User();	
			$user->hydrate($data);
			
			$testIfExist=[];
			foreach($this->userManager->findAll('*') as $line){
				array_push($testIfExist, $line);
			}
			if($user->check_if_unique($testIfExist)){
				$this->userManager->create($user);
				$userData = $this->userManager->findOne($data['email'], $data['password']);
				$this->user = new User();
				$this->user->hydrate($userData);
				
				$loc="";
			}else{
				session_destroy();
				$loc="?ctrl=user&action=create&error=exist";
			}
		}else{
			$loc="?ctrl=user&action=create&error=empty";
		}
		
		header('Location:index.php'.$loc);
	}
	public function modif(){
		$page="updateUser";
		require('./view/main.php');
	}
	
	public function update(){
		
		$data=$this->test_fields();

		if($data){
			foreach($data as $key=>$value){
				$_SESSION['user'][$key]=$value;
				$this->userManager->update($_SESSION['user']['id'], $key, $value);
			}
		}
		$page="modificationOk";
		require('./view/main.php');
	}
	
	private function test_fields(){
		$data=["email"=>"", "firstName"=>"", "lastName"=>"", "city"=>"", "postalCode"=>"", "address"=>""];
		foreach($data as $key=>$value){
			if(isset($_POST[$key]) && $_POST[$key]!=""){
				$data[$key]=$_POST[$key];
			}else{
				return false;
			}
		}
		return $data;
	}
	public function notFound(){
		$page="404";
		require('./view/main.php');
	}

}































