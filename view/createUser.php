<h2>Create your account</h2>
<?if(isset($_GET['error']) && $_GET['error']=="exist") echo '<p>This account already exist. Do you want to <a href="index.php?ctrl=user&action=login">log in</a> ?</p>';?>
<?if(isset($_GET['error']) && $_GET['error']=="empty") echo '<p>All the fields must be completed.</p>';?>
<form class="userForm" method="post" action="index.php?ctrl=user&action=doCreate">
	<p><label for="firstName">First name : </label> <input type="text" name="firstName" id="firstName" /></p>
	<p><label for="lastName">Last name : </label> <input type="text" name="lastName" id="lastName" /></p>
	<p><label for="email">Email : </label> <input type="email" name="email" id="email" /></p>
	<p><label for="address">Address : </label> <input type="text" name="address" id="address" /></p>
	<p><label for="postalCode">Postal code : </label> <input type="text" name="postalCode" id="postalCode" /></p>
	<p><label for="city">city : </label> <input type="text" name="city" id="city" /></p>
	<p><label for="password">Password : </label> <input type="password" name="password" id="password" /></p>
	<p><input type="submit" value="Create account"/></p>

</form>
