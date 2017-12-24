<?php
class ProductManager {
	private $db;
	public function __construct($db){
		$this->db=$db;
	}
	public function findAll(){
		
		$req="SELECT * from products";
		$search = $this->db->query($req);
		$found = $search -> fetchAll();
		return $found;
	}
	public function findOne($id){
		$req="SELECT * from products where id=".$id;
		$search = $this->db->query($req);
		$found = $search -> fetch();
		return $found;
	}
	public function findByCategory( $id_category ){
		$req="SELECT * from products where id_category=".$id_category;
		$search = $this->db->query($req);
		$found = $search -> fetchAll();
		return $found;
	}
}