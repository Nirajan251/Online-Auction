<?php  
	$conn = mysqli_connect('localhost', 'root', '',"biddingsystemdb");
	 if (!$conn)
    {
	 die('Could not connect: ' . mysqli_error());
	}
	//mysql_select_db("biddingsystemdb", $conn);
?>