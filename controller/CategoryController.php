<?
class categoryController{
	public function __construct($db1) {

    }
	public function display(){
		$page="display";
		require('./view/main.php');
	}
}