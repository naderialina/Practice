<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
<h1>Task For The Day</h1>
<ul>
    <li>
    	<strong>Title:</strong><?= $task['Title']; ?>
    </li>
    <li>
    	<strong>Due:</strong><?= $task['Due']; ?>
    </li>
    <li>
    	<strong>Assigned_to:</strong><?= $task['Assigned_to']; ?>
    </li>
     <li>
    	<strong>Status:</strong>
        <?php 
            if ($task['Completed']):?>
            <span class="icon">&#9989</span>
            <?php else: ?>
            <span class="icon">&#10062</span>
            <?php endif; ?>
    </li>
	</ul>
</body>
</html>