<?php
	require("../db.php");
	$productid = $_POST['id'];
	mysqli_query($conn,"UPDATE products SET status = 1 WHERE productid = '$productid' ") or die (mysqli_error());
?>
<?php 
	$datenow = date('l,F d,Y');
	$endedsum = mysqli_query($conn,"SELECT * FROM products WHERE duedate < '$datenow' AND status = 0") or die(mysqli_error());
	$counters = 0;
	WHILE($stat = mysqli_fetch_array($endedsum)){
		$counters++;
	}
	echo $counters;
	
?>