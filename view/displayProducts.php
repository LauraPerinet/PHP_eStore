<p class="smallFont"><a href="index.php">Categories</a> > <?echo $cat->getName();?></p>
<h2><?echo $cat->getName();?></h2>
<ul id="displayProducts">
	<?foreach($list as $prod){?>
		<li class="smallProd">
			<div>
				<a href="index.php?ctrl=product&action=display&prod=<?echo $prod->getId();?>" />
					<img src="img/<?echo $prod->getUrl();?>" alt="<?echo $prod->getName();?>" />
					<div class="label_prod">
						<p><?echo $prod->getName();?> • 
						<span><?echo $prod->getPrice();?> €</span></p>
					</div>
				</a>
			</div>
		</li>
	<?}?>
</ul>
