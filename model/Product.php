<?php
class Product{
	private $id;
	private $name;
	private $url;
	private $price;
	private $description;
	private $id_category;

	public function __construct(){
	}
	public function hydrate(array $data){
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
		return $this->url;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getDescription(){
		return $this->description;
	}
	public function getIdCategory(){
		return $this->id_category;
	}
}