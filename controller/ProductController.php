<?php
class ProductController {
	private $productManager;
	private $product;

    public function __construct($db) {

		require('./model/Product.php');
		require_once('./model/ProductManager.php');
		$this->productManager = new ProductManager($db);
    }
	
	public function addToCart( ){
	
	}
	
	public function display( ){
		
	}
	
}