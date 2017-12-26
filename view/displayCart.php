
<h2>Your cart</h2>
<div id="checkout">
<? if(isset($products) && count($products)>0 ){?>
	<table id="displayCart">
	<? 
	$total=0;
	for($i=0; $i<count($products); $i++){
		$total+=$products[$i]->getPrice()*$_SESSION['cart'][$i]['quantity'];
		?>
		<tr id="<? echo $i;?>">
			<td><img class="remove" src="./img/remove.png" alt="remove <? echo $products[$i]->getName() ?>"/></td>
			<td class="nameProd"><? echo $products[$i]->getName() ?></td>
			<td>Unit price: €<? echo $products[$i]->getPrice() ?></td>
			<td>Qty: <input size="3" type="number" min="1" value="<? echo $_SESSION['cart'][$i]['quantity'];?>" class="qty" /></td>
			<td>€ <span class="subtotal" id="total<? echo $i; ?>" data_price="<? echo $products[$i]->getPrice();?>"><? echo $products[$i]->getPrice()*$_SESSION['cart'][$i]['quantity']; ?></span></td>
		</tr>
	<?}?>
	<tr>
		<td colspan="4"></td>
		<td >Total € <span id="total"><?echo $total;?></span></td>
	</tr>
	</table>
	<a href="index.php?ctrl=cart&action=checkout" class="button">Checkout</a>
<?}else{?>
	<p>Your cart is empty !</p>
<?}?>
</div>
<script type="text/javascript" src="./js/XMLHrequest.js"></script>
<script type="text/javascript" src="./js/cartQty.js"></script>

























