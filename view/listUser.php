<h2>Users List</h2>
<table class="admin">
	<tr>
		<th>ID</th>
		<th>Lastname</th>
		<th>Firstname</th>
		<th>Email</th>
		<th>Address</th>
		<th>Postal Code</th>
		<th>City</th>
		<th>Admin</th>
	</tr>
	<?foreach($list as $user){?>
		<tr>
			<td><? echo $user['id'];?></td>
			<td><? echo $user['lastName'];?></td>
			<td><? echo $user['firstName'];?></td>
			<td><? echo $user['email'];?></td>
			<td><? echo $user['address'];?></td>
			<td><? echo $user['postalCode'];?></td>
			<td><? echo $user['city'];?></td>
			<td><? if($user['admin']==1) echo "Admin";?></td>
		</tr>
	<?}?>
</table>