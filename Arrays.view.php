<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logics</title>
	<style> 
		header{
			background: gray;
			text-align: center;
		}
	</style>
</head>
<body>
<ul>
	<?php foreach ($names as $name): ?>
	<li> <?= $name; ?></li>
	<?php endforeach; ?>
</ul>
<ul>
	<?php foreach ($LastNames as $LN): ?>
	<li> <?= $LN; ?></li>
	<?php endforeach; ?>
</ul>
</body>
</html>