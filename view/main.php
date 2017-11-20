<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eStore</title>
</head>
<body>
	<div id="global">
		<header>
			<h1>Super site</h1>
			<p><? include('./view/header.php');?></p>
		</header>
		<div id="content">
			<? include('./view/'.$page.'.php'); ?>
		</div>
		<footer>
			<p>footer</p>
		</footer>
	</div>
</body>
</html>