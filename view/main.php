<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eStore</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
	<link rel="stylesheet" media="screen and (max-width:800px)" href="css/smallscreen.css" type="text/css" />
</head>
<body>
	<div id="global">
		<header>
			<div id="header">
				<h1><a href="index.php"><img src="./img/logo.png" alt="Page d'accueil"/></a></h1>
				<? include('./view/header.php');?>
			</div>
			<nav>
				<ul>
					<li><a href="index.php?ctrl=category&action=displayOne&cat=1">Pigments</a></li>
					<li><a href="index.php?ctrl=category&action=displayOne&cat=2">Varnish</a></li>
					<li><a href="index.php?ctrl=category&action=displayOne&cat=3">Mediums</a></li>
					
				</ul>
			</nav>
		</header>
		<div id="content">
			<?
			if(isset($page)){
				require("./View/".$page.".php");
			}
			?>
		</div>
		<footer>
			<p>footer</p>
		</footer>
	</div>
</body>
</html>