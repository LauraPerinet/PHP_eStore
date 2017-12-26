<p class="smallFont"><a href="index.php">Categories</a> > <a href="index.php?ctrl=category&action=displayOne&cat=<?echo $prod->getIdCategory();?>"><?echo $prod->getCategory();?></a> > <?echo $prod->getName();?></p>

<div id="showProduct">
	
	<img src="img/<? echo $prod->getUrl(); ?>" alt="<? echo $prod->getName(); ?>" />
	<div id="infoProduct">
		<h2><? echo $prod->getName(); ?></h2>
		<p class="smallFont">
			Category: 
			<a href="index.php?ctrl=category&action=displayOne&cat=<? echo $prod->getIdCategory(); ?>"/><? echo $prod->getCategory(); ?></a>
		</p>
		<ul>
			<?foreach($prod->getDescription() as $li){?>
				<li><? echo $li;?></li>
			<?}?>
		</ul>
		
		<p class="smallFont">Price: <span>€ <? echo $prod->getPrice(); ?> </span></p>
		<p><a class="button" href="index.php?ctrl=product&action=addToCart&prod=<? echo $prod->getId(); ?>">Add to cart</a></p>
	</div>
</div>
<div id="seeAlso">
	<h3>You also might be interested by :</h3>
	<ul>
	<?foreach($random as $prod){?>
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
</div>