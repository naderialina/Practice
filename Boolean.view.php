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
    	<strong>Completed:</strong><?= $task['Completed'] ? 'Complete' : 'Incomplete'; ?>
    </li>
	</ul>
</body>
</html>