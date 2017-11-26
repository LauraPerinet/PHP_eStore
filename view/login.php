<h2>Log in</h2>
<form class="userForm " method="post" action="index.php?ctrl=user&action=doLogin">
	<? if(isset($_GET['error']) && $_GET['error']=="empty"){?>
		<p>Please complete your <?echo $_GET['field'];?></p>
	<?} if(isset($_GET['error']) && $_GET['error']=="wrong"){?> <p>No match found ! Please try again or <a href="index.php?ctrl=user&action=create">create a new account</a></p><?}?>
	<p><label for="email">Email</label><input name="email" id="login" type="email"/></p>
	<p><label for="password">Password</label><input name="password" id="password" type="password"/></p>
	<p><input type="submit" value="Sign in"/></p>
</form>