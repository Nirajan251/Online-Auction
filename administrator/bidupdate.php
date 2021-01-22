
<?php
	require("../db.php");
	$bidid = $_POST['id'];
	mysqli_query($conn,"UPDATE bidreport SET status = 1 WHERE bidid = '$bidid'") or die (mysqli_error());
	
?>
<?php $bidnum = mysqli_query($conn,"SELECT * FROM bidreport LEFT JOIN member ON member.memberid = bidreport.bidder LEFT JOIN products ON products.productid = bidreport.productid WHERE bidreport.status = 0") or die(mysqli_error());
			$count = 0;
			WHILE($stat = mysqli_fetch_array($bidnum)){
				$count++;
			}
			echo $count;
	
?>