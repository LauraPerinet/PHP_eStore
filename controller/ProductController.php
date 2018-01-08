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
		if (!(self::$_instance instanceof self)){
				self::$_instance = new self($db);
			}
        
        return self::$_instance;
    }
	
	public function addToCart( ){
		if(isset($_GET['prod'])){
			$prod= $this->findOne($_GET['prod']);
			$productSession = ['id' => $_GET['prod'], 'quantity'=>1];
			if(!isset($_SESSION['cart'])){
				$_SESSION['cart'][]=$productSession;
			}else{
				array_push($_SESSION['cart'], $productSession);
			}
		}
		header("Location:index.php?ctrl=category&action=displayOne&cat=".$prod->getIdCategory());
	}
	
	public function displayAll( $cat ){
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
			$prod= $this->findOne($id);
			if(isset($prod)){
				$random=$this->random($id);
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
	
	public function findOne($id){
		foreach($this->products as $product){
			if($product->getId()==$id){
				$prod=$product;
				break;
			}
		}
		return $prod;
	}
	
	private function findCategory($id){
		require_once('./controller/CategoryController.php');
		$this->categoryCtrl=CategoryController::getInstance(self::$_db);
		$category = $this->categoryCtrl->getOneCategory($id);
		return $category;
	}
	
	private function createProducts(){
		$list = $this->manager->findAll();
		
		if(gettype($list)=="array"){
			foreach($list as $data){
				$prod=new Product();
				$categoryName = $this->findCategory($data['id_category'])->getName();
				$data['category']=$categoryName;
				$prod->hydrate($data);
				array_push($this->products, $prod);
			}
		}
	}
	private function random($id_reserved){
		$random=[];
		$products=$this->products;
		for($i=0; $i<4; $i++){
			do{
				$index=rand(0, count($products)-1);
			}while($products[$index]->getId()==$id_reserved);
			array_push($random, $products[$index]);
			array_splice($products, $index, 1);
		}
		return $random;

	}
	
}






















