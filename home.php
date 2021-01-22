<?php
	session_start();
	require("functions.php");
	require("htmls.php");
	$query = mysqli_query($conn,"SELECT * FROM products WHERE status = 0") or die (mysqli_error());
	while($row = mysqli_fetch_array($query))
	{
		$datenow = date("Y-m-d");
		$duedate = $row['duedate'];
		$prodid = $row['productid'];
		if($datenow >= $duedate){
			mysqli_query($conn,"UPDATE products SET status = 1 WHERE productid = '$prodid'") or die (mysqli_error());
		}
	}
	headhtml();
?>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="home.php" class="nav1">Home</a></li>
        <li class="divider" ></li>
        <li><a href="prodcateg.php" class="nav2">Products</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav2">About Us</a></li>
        <li class="divider"></li>
<?php account(); ?>
<script type='text/javascript'>
	jQuery(document).ready( function() {
		jQuery('.nav3').hide();
		jQuery('.nav4').click( function() {
			jQuery('.nav3').toggle('fade');	
		});
	});
</script>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
   	<div class="left_content"> 
      <div class="title_box">Categories</div>
      <ul class="left_menu"> 
    <?php
			categories();
			logform();
	?>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Products On Bid</div>
     	<?php
	  		latest();
		?>
    </div>
    <!-- end of center content -->
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php foothtml(); ?>
