<h2>Checkout</h2>

<form class="userForm" method="post" action="index.php?ctrl=cart&action=thanks">
	<div id="billAndShip">
		<div>
			<h3>Billing address</h3>
			<p><label for="firstNameB">First name : </label> <input type="text" name="firstNameB" id="firstNameB" value="<?if(isset($_SESSION['user']['firstName'])) echo $_SESSION['user']['firstName'];?>"/></p>
			<p><label for="lastNameB">Last name : </label> <input type="text" name="lastNameB" id="lastNameB" value="<?if(isset($_SESSION['user']['lastName'])) echo $_SESSION['user']['lastName'];?>"/></p>
			<p><label for="emailB">Email : </label> <input type="email" name="emailB" id="emailB" value="<?if(isset($_SESSION['user']['email'])) echo $_SESSION['user']['email'];?>"/></p>
			<p><label for="addressB">Address : </label> <input type="text" name="addressB" id="addressB" value="<?if(isset($_SESSION['user']['address'])) echo $_SESSION['user']['address'];?>"/></p>
			<p><label for="postalCodeB">Postal code : </label> <input type="text" name="postalCodeB" id="postalCodeB" value="<?if(isset($_SESSION['user']['postalCode'])) echo $_SESSION['user']['postalCode'];?>"/></p>
			<p><label for="cityB">city : </label> <input type="text" name="cityB" id="cityB" value="<?if(isset($_SESSION['user']['city'])) echo $_SESSION['user']['city'];?>"/></p>
		</div>
		<div>
			<h3>Shipping address</h3>
			<p><label for="firstNameS">First name : </label> <input type="text" name="firstNameS" id="firstNameS" value="<?if(isset($_SESSION['user']['firstName'])) echo $_SESSION['user']['firstName'];?>"/></p>
			<p><label for="lastNameS">Last name : </label> <input type="text" name="lastNameS" id="lastNameS" value="<?if(isset($_SESSION['user']['lastName'])) echo $_SESSION['user']['lastName'];?>"/></p>
			<p><label for="emailS">Email : </label> <input type="email" name="emailS" id="emailS" value="<?if(isset($_SESSION['user']['email'])) echo $_SESSION['user']['email'];?>"/></p>
			<p><label for="addressS">Address : </label> <input type="text" name="addressS" id="addressS" value="<?if(isset($_SESSION['user']['address'])) echo $_SESSION['user']['address'];?>"/></p>
			<p><label for="postalCodeS">Postal code : </label> <input type="text" name="postalCodeS" id="postalCodeS" value="<?if(isset($_SESSION['user']['postalCode'])) echo $_SESSION['user']['postalCode'];?>"/></p>
			<p><label for="cityS">city : </label> <input type="text" name="cityS" id="cityS" value="<?if(isset($_SESSION['user']['city'])) echo $_SESSION['user']['city'];?>"/></p>
		</div>
	</div>
	<div>
		<h3>Payment</h3>
		<p><label for="paymentName">Cardholder's name</label><input type="text" name="paymentName" id="paymentName"/></p>
		<p><label for="paymentNumber">Credit card number</label><input type="text" name="paymentNumber" id="paymentNumber"/></p>
		<p><label for="paymentExpirationMonth">Credit card expiration</label>
			<select name="paymentExpirationMonth">
				<option>Jan</option>
				<option>Feb</option>
				<option>Mar</option>
				<option>Apr</option>
				<option>May</option>
				<option>Jun</option>
				<option>Jul</option>
				<option>Aug</option>
				<option>Sep</option>
				<option>Oct</option>
				<option>Nov</option>
				<option>Dec</option>
			</select>
			
			<select name="paymentExpirationYear">
				<?for($i=0; $i<20; $i++){?>
					<option><? echo date(o)+$i;?></option>
				<?}?>
			</select>
		</p>
		
	</div>
	<input type="submit" value="Place your order"/>
</form>
