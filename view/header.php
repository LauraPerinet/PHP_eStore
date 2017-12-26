<?
if(isset($_SESSION['user'])){
	$welcome= "<p>Welcome <a href='index.php?ctrl=user&action=modif'>".$_SESSION['user']['firstName'].'</a></p><p><a href="index.php?ctrl=user&action=logout">Sign out</a></p>';
	if($_SESSION['user']['admin']==1) $welcome.='<p><a href="index.php?ctrl=admin&action=listUser">Back Office</a></p>';

}else{
	$welcome= '<p><a href="index.php?ctrl=user&action=login">Sign in</a> or <a href="index.php?ctrl=user&action=create">create a new account</a></p>';
}
if(isset($_SESSION['cart'])){
	$cart=count($_SESSION['cart']);
}else{
	$cart=0;
}
?>

<div id="userInfo">
	<? echo $welcome; ?>
	<div id="cart">
		<p><a href="index.php?ctrl=cart&action=display"><img src="img/cart.png" alt="Cart" /> Your cart : <span><? echo $cart;?></span></span></a></p> 
	</div>
</div>
