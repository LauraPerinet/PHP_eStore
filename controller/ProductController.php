<?php
class ProductController {
	private $manager;
	private $products=[];
	private $categoryCtrl;
	private static $_db;
	private static $_instance;

    private function __construct($db) {
		require('./model/Product.php');
		require_once('./model/ProductManager.php');
		self::$_db=$db;
		$this->manager = new ProductManager($db);
		$this->createProducts();
    }
	
	public static function getInstance ($db) {
		var_dump(self::$_instance);
		if (!(self::$_instance instanceof self)){
				self::$_instance = new self($db);
			}
        
        return self::$_instance;
    }
	
	public function addToCart( ){
	
	}
	
	public function displayAll( $cat ){
		echo 'coucou';
		$list=[];
		foreach($this->products as $prod){
			if($prod->getIdCategory()==$cat->getId()){
				array_push($list, $prod);
			}
		}
		
		$page="displayProducts";
		require('./view/main.php');
	}
	
	public function display(){
		if(isset($_GET['prod']) && is_numeric($_GET['prod'])){
			$id=$_GET['prod'];
			foreach($this->products as $product){
				if($product->getId()==$id){
					$prod=$product;
					break;
				}
			}
			if(isset($prod)){
				$page="showProduct";
				require('./view/main.php');
			}else{
				$this->notFound();
			}
		}else{
			$this->notFound();
		}
	}
	
	public function notFound(){
		$page="404";
		require('./view/main.php');
	}
	
	private function createProducts(){
		$list = $this->manager->findAll();
		require_once('./controller/CategoryController.php');
		$this->categoryCtrl=CategoryController::getInstance(self::$_db);
		
		if(gettype($list)=="array"){
			foreach($list as $data){
				$prod=new Product();
				var_dump($this->$categoryCtrl);
				$categoryName = $this->$categoryCtrl->getOneCategory($data['id_category'])->getName();
				$data['category']=$categoryName();
				$prod->hydrate($data);
				array_push($this->products, $prod);
			}
		}
	}
	
}