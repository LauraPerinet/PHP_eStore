<?
class categoryController{
	public function __construct($db1) {

    }
	public function display(){
		$page="displayCategories";
		require('./view/main.php');
	}
}