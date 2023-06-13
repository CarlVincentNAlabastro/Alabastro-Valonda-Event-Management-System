<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

// Database connection details


// Check connection
include('database\db.php');
	$query = "SELECT * FROM event_overview WHERE id=2";
  $result = mysqli_query($conn,$query);
    $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
	foreach($events as $event){echo $event['project_name'];}
	

?>


<body>
</body>
</html>