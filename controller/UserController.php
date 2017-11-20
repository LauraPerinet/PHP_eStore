<?php
class userController {

	private $userManager;
	private $user;

    public function __construct($db1) {

		require('./model/User.php');
		require_once('./model/UserManager.php');
		$this->userManager = new UserManager($db1);

        $this->db = $db1 ;
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
					$this->user = new User();
					$this->user->hydrate($userData);
					$loc='Location:index.php?ctrl=category&action=display';
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

}