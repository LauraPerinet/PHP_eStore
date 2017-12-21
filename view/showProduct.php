<h2><? echo $prod->getName(); ?></h2>
<div>
	<img src="img/<? echo $prod->getUrl(); ?>" alt="<? echo $prod->getName(); ?>" />
	<div>
		<p>
			Catégorie : 
			<a href="index.php?ctrl=category&action=displayOne&cat=<? echo $prod->getIdCategory(); ?>"/><? echo $prod->getName(); ?></a>
		</p>
		<ul>
			<?foreach($prod->getDescription() as $li){?>
				<li><? echo $li;?></li>
			<?}?>
		</ul>
		
		<p>Prix : <? echo $prod->getPrice(); ?> €</p>
		<p><input type="submit" value="Ajouter au panier"/></p>
	</div>
</div>