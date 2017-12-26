<?
class adminController{
	private $userManager;
	private $user;
	private static $_instance;

    private function __construct($db1) {
		require('./model/User.php');
		require_once('./model/UserManager.php');
		$this->user=new User();
		$this->user->hydrate($_SESSION['user']);
		$this->userManager = new UserManager($db1);

        $this->db = $db1 ;
    }
	
	public static function getInstance ($db) {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self($db);

        return self::$_instance;
	}
	
	public function listUser(){
		if($this->user->is_admin()==1){
			$list=$this->userManager->findAll("*");
			$page="listUser";
		}else{
			$page="403";
		}
		require('./view/main.php');
	}
	
	public function notFound(){
		$page="404";
		require('./view/main.php');
	}
}