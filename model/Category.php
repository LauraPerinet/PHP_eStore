<?php
class Category{
	private $id;
	private $name;
	private $img_url;
	public function __construct(){}
	
	public function hydrate($data){
		foreach($data as $key=>$value){
			$this->$key=$value;
		}
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getUrl(){
		return $this->img_url;
	}
	
}