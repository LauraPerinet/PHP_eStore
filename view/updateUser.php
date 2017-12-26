<h2>Update your account</h2>

<form class="userForm" method="post" action="index.php?ctrl=user&action=update">
	<p><label for="firstName">First name : </label> <input type="text" name="firstName" id="firstName" value="<?if(isset($_SESSION['user']['firstName'])) echo $_SESSION['user']['firstName'];?>"/></p>
	<p><label for="lastName">Last name : </label> <input type="text" name="lastName" id="lastName" value="<?if(isset($_SESSION['user']['lastName'])) echo $_SESSION['user']['lastName'];?>"/></p>
	<p><label for="email">Email : </label> <input type="email" name="email" id="email" value="<?if(isset($_SESSION['user']['email'])) echo $_SESSION['user']['email'];?>"/></p>
	<p><label for="address">Address : </label> <input type="text" name="address" id="address" value="<?if(isset($_SESSION['user']['address'])) echo $_SESSION['user']['address'];?>"/></p>
	<p><label for="postalCode">Postal code : </label> <input type="text" name="postalCode" id="postalCode" value="<?if(isset($_SESSION['user']['postalCode'])) echo $_SESSION['user']['postalCode'];?>"/></p>
	<p><label for="city">city : </label> <input type="text" name="city" id="city" value="<?if(isset($_SESSION['user']['city'])) echo $_SESSION['user']['city'];?>"/></p>

	<input type="submit" value="Update"/>
</form>
