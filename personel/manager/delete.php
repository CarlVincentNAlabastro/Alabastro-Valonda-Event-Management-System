<?php
   include('../../database/db.php');
$id = $_GET['id'];
   


    


    $del = "DELETE FROM employee WHERE (`id` = '$id')";


	$result = mysqli_query($conn,$query);

    if (mysqli_query($conn,$del)) {
		
		header("Location: edit.php");

		
	}


?>
