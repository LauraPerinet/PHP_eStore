<?php
class CategoryManager{
	private $db;
	private $categories;
	
	public function __construct($db){
		$this->db=$db;	
	}
	
	public function findOne($id){
		$select = 'SELECT * FROM `categories` where id='.$id;
		$search = $this->db->query($select);	
		$found=$search->fetch();
		return $found;
		$search->closeCursor();	
	}
	
	public function findAll(){
		$select = 'SELECT * FROM categories';
		$search = $this->db->query($select);
		$found = $search->fetchAll();
		return $found;	
		$search->closeCursor();	
	}
}