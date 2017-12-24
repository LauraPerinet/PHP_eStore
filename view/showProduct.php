<h2><? echo $prod->getName(); ?></h2>
<div>
	<img src="img/<? echo $prod->getUrl(); ?>" alt="<? echo $prod->getName(); ?>" />
	<div>
		<p>
			Catégorie : 
			<a href="index.php?ctrl=category&action=displayOne&cat=<? echo $prod->getIdCategory(); ?>"/><? echo $prod->getCategory(); ?></a>
		</p>
		<ul>
			<?foreach($prod->getDescription() as $li){?>
				<li><? echo $li;?></li>
			<?}?>
		</ul>
		
		<p>Prix : <? echo $prod->getPrice(); ?> €</p>
		<p><a class="btn" href="index.php?ctrl=product&action=addToController <? echo $prod->getId(); ?> ">Ajouter au panier</a></p>
	</div>
</div>