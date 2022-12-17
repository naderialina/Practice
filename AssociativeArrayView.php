<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
<ul>
    <?php foreach ($person as $key => $Info):?>
    	<li><strong><?= $key ?></strong><?=$Info;?></li>
    	<?php endforeach; ?>
</ul>
</body>
</html>