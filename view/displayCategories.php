
<h2>Categories</h2>
<ul id="displayCategories">
	<?php 
	foreach($list as $category){?>
		<li>
			<div>
				<a href="index.php?ctrl=category&action=displayOne&cat=<? echo $category->getId();?>" >
					<div class="category_name"><?echo $category->getName(); ?></div>
					<div class="thumbnail"><img src="img/<?echo $category->getUrl(); ?>" alt="<?echo $category->getName(); ?>"/></div>
				</a>
			</div>
		</li>
	<?}?>
</ul>