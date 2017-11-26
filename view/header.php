<div id="userInfo">
<?
if(isset($_SESSION['user'])){
	echo "<p>Welcome ".$_SESSION['user']['firstName'].'</p><p><a href="index.php?ctrl=user&action=logout">Sign out</a></p>';
	if($_SESSION['user']['admin']==1) echo '<p><a href="index.php?ctrl=admin&action=listUser">Back Office</a></p>';

}else{
	echo '<p><a href="index.php?ctrl=user&action=login">Sign in</a> or <a href="index.php?ctrl=user&action=create">create a new account</a><p>';
}
?>
</div>
