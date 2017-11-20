<?
if(isset($_SESSION['user'])){
	echo "Welcome ".$_SESSION['user']['firstName'];

}else{
	echo '<a href="index.php?ctrl=user&action=login">Sign in</a>';
}
?>
