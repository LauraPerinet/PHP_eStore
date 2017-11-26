<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eStore</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="global">
		<header>
			<h1>Super site</h1>
			<? include('./view/header.php');?>
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