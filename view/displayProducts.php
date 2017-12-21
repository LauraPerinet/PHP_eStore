<h2>Produits de la catégorie <?echo $cat->getName();?></h2>
<ul>
	<?foreach($list as $prod){?>
		<li class="smallProd">
			<div>
				<a href="index.php?ctrl=product&action=display&prod=<?echo $prod->getId();?>" />
					<img src="img/<?echo $prod->getUrl();?>" alt="<?echo $prod->getName();?>" />
					<div class="label_prod">
						<p><?echo $prod->getName();?></p>
						<p><?echo $prod->getPrice();?> €</p>
					</div>
				</a>
			</div>
		</li>
	<?}?>
</ul>