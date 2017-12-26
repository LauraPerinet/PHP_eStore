<?php
class CartController{
	private $db;
	private static $_instance;
	private function __construct($db){
		$this->db=$db;
	}
	public function getInstance($db){
		if (!(self::$_instance instanceof self)){
				self::$_instance = new self($db);
			}
        
        return self::$_instance;
	}
	
	public function display(){
		$products=[];
		if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0 ){
			foreach($_SESSION['cart'] as $prod){
				require_once('./controller/productController.php');
				array_push($products, ProductController::getInstance($this->db)->findOne($prod['id']));
			}
		}
		$page="displayCart";
		require('./view/main.php');
	}
	public function update(){
		if(isset($_GET['index']) && isset($_GET['add'])){
			$qty=0;
			if(is_numeric($_GET['add']) && $_GET['add']>=0){
				$qty=$_GET['add'];
			}
			$_SESSION['cart'][$_GET['index']]['quantity']=$qty;
			echo $qty;
		}
	}
	public function remove(){
		if(isset($_GET['index'])){
			array_splice($_SESSION['cart'], $_GET['index'], 1);
		}
	}
	public function checkout(){
		if(isset($_SESSION['user'])){
			$page="checkout";
		}else{
			$page="login";
		}
		require('./view/main.php');
	}
	public function thanks(){
		$page="thanks";
		require('./view/main.php');
	}
	public function notFound(){
		$page="404";
		require('./view/main.php');
	}
}