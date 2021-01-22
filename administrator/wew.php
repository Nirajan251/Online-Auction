<?php
	require("../db.php");
	$msgnotifsid = $_POST['id'];
	mysqli_query($conn,"UPDATE msgnotifs SET status = 1 WHERE msgnotifsid = '$msgnotifsid'") or die (mysqli_error());
?>
<?php
	$msgnum = mysqli_query($conn,"SELECT * FROM msgnotifs WHERE (toid = 'admin' AND status = 0)") or die(mysqli_error());
	$counter = 0;
	WHILE($stat = mysqli_fetch_array($msgnum)){
	$counter++;
	}
?>