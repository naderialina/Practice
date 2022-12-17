<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practicing php and html</title>
	<style> 
		header{
			background: gray;
			text-align: center;
		}
		h2{
			background: yellow;
		}
		h3{
			background: red;
		}
	</style>
</head>
<body>
	<header>
<h1>
<?php
$name = $_GET['name'];
echo $name;
?>
</h1>

<h2><?php 
echo "<br>";
echo "Welcome to ". $_GET['name'] . " Website"; ?></h2>
<h3><?="Ignore what I am writing cause I am practicing LOL!" . htmlspecialchars($_GET['name']); ?></h3>
    </header>

</body>
</html>