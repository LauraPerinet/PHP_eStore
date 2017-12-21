<?
class CategoryController{
	private $categories=[];
	private $manager;
	private static $_db;
	private $productCtrl;
	private static $_instance;
	
	private function __construct($db1) {
		require_once('./model/categoryManager.php');
		require_once('./model/Category.php');
		self::$_db=$db1;
		$this->manager = new CategoryManager($db1);
		
		$this->createCategories();
    }
	
	public static function getInstance ($db) {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self($db);

        return self::$_instance;
    }
	
	public function display(){
		$list=$this->categories;
		$page="displayCategories";
		require('./view/main.php');
	}
	
	public function displayOne(){
		if(isset($_GET['cat']) && is_numeric($_GET['cat'])){
			$id=$_GET['cat'];
			$cat=$this->getOneCategory($id);
			if(isset($cat)){
				require_once('./controller/productController.php');
				$products= ProductController::getInstance(self::$_db)->displayAll($cat);
			}else{
				$this->notFound();
			}
		}else{
			$this->display();
		}
	}
	
	public function getOneCategory($id){
		foreach($this->categories as $cat){
			if($cat->getId()==$id){
				return $cat;
			}
		}
		return null;
	}
	
	public function notFound(){
		$page="404";
		require('./view/main.php');
	}
	
	private function createCategories(){
		$list=$this->manager->findAll();
		foreach($list as $data){
			$cat = new Category();
			$cat->hydrate($data);
			array_push($this->categories, $cat);
		}
	}
}