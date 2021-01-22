<?php
	session_start();
	include ("db.php");
	require("htmls.php");
	require("functions.php");
	headhtml();
?>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="home.php" class="nav2"> Home</a></li>
        <li class="divider"></li>
        <li><a href="prodcateg.php" class="nav2">Products</a></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav1">About Us</a></li>
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
    <div class="crumb_navigation"> Navigation: <a href="home.php">Home</a> &lt; <span class="current">About Us</span> </div>
    <div class="left_content">
      <div class="title_box">Auction</div>
      <ul class="left_menu">
		<div class="mandm">
		<li class="even"><a>Mission & Objectives</a></li>
		</div>
		<div class="org">
        <li class="odd"><a>Organization</a></li>
		</div>
		<div class="feed">
        <li class="even"><a>Terms and Conditions</a></li>
		</div>
		<div class="dev">
        <li class="odd"><a>The Developer</a></li>
		</div>
      </ul>
	<?php logform(); ?>
    </div>
    <!-- end of left content -->
    <div class="center_content"></div>
	<!-- Mission and Vission -->
		<div class="mandms">
		<div class="center_title_bar">Mission and Vission</div>
		<div class="prod_box_big">
			<div class="top_prod_box_big"></div>
			<div class="center_prod_box_big">
							<div class="welc"><center>Welcome to the Bidding Zone</center></div>
							<div class="welcsub"><center><p>This is a test Project.<p></center></div>
			<div class='logreg'>
					<div class="loginb">
						<div class="top_prod_box"></div>
						<div class="center_prod_box">
						  <div class="product_title"><a>Our Mission</a></div>
						  <div class="product_img"><a><img src="images/mission.jpg" alt="" border="0" /></a></div>
						</div>
					</div>
					<div class="regb">
						<div class="top_prod_box"></div>
						<div class="center_prod_box">
						  <div class="product_title"><a>Objectives</a></div>
						  <div class="product_img"><a><img src="images/objectives.jpg" alt="" border="0" /></a></div>
						</div>
					</div>
			</div>
				<script type='text/javascript'>
					jQuery(document).ready( function() {
						
						jQuery('.contact_form').hide();
						jQuery('.reg_form').hide();
						jQuery('.loginb').click( function() {
							jQuery('.contact_form').toggle('slow');
							jQuery('.reg_form').hide();
						});
						jQuery('.regb').click( function() {
							jQuery('.reg_form').toggle('slow');
							jQuery('.contact_form').hide();
						});
					});
				</script>
			<div class="contact_form">
				<div id="form_row1a">
				  	<span class="blue">&nbsp; &nbsp; The Online Auction purpose is to give and provide excelled services, creating an appropriate online auction webpage that promotes different kinds of products. It declares the company�s purpose and serves as the standard against in which the business weighs its actions and decisions.</span>                
				</div>
			</div>
			  
			<div class="reg_form">
				<div id="regstep1">
				 <span class="blue"><li>To provide fast and easy online bidding transactions to customers with a user friendly online system.</li>
				 <li>To provide the company a faster way to advertise and to communicate with its customer with regards of bidding transactions and product.</li>
				 <li>Provide a system that can accommodate bidding transaction 24/7. </li>
				</span>
				</div>
			</div>
			</div>
			<div class="bottom_prod_box_big"></div>
		</div>
		</div>
		 <!-- end of it -->
		 <!-- end of left content -->
		 <!-- end of it -->		 
		 <!-- Location -->
		 <!-- Contacts -->
		 <!-- end of it -->
		 <!-- Organization -->
		 <div class="organization">
		  <div class="center_title_bar">Organization</div>
		  <div class="prod_box_big">
			<div class="top_prod_box_big"></div>
			<div class="center_prod_box_big">
							<div class="welc"><center>Company's Organizational Chart</center></div>
							<div class='logreg'>
					<div class="loginb">
						<div class="top_prod_box"></div>
						<div class="center_prod_box">
						  <div class="product_img"><a><img src="images/chart.jpg" alt="" border="0" /></a></div>
						</div>
					</div>
					
				</div>

			   </div>
			<div class="bottom_prod_box_big"></div>
		  </div>
		 </div>
		 <!-- end of it -->
		 <!-- company feedback -->
		 <div class="companyfeedback">
		  <div class="center_title_bar">Terms and Condtions</div>
		  <div class="prod_box_big">
			<div class="top_prod_box_big"></div>
			<div class="center_prod_box_big">
							<div class="welc"><center>Terms and Conditions</center></div>
							<div class="welcsub"><center><p>this is a test project<p></center></div>
				
			 <div class='companyfeedback'>
					<div class="loginc">
					
				 <div class="welcsub"><b>Bidding and Buying</b></div>
				 <span class="blue"><li>As a bidder, if you have the highest bid at the end of the auction, at or above the minimum bid price
				 and your bid is accepted by the seller, you are obligated to complete the transactions.</li></span><br>
				</div>
			  </div>
			   </div>
			<div class="bottom_prod_box_big"></div>
		  </div>
		 </div>
		 <!-- end it -->
		 <!-- The Developer -->
		 <div class="developer">
		  <div class="center_title_bar">The Developer</div>
		  <div class="prod_box_big">
			<div class="top_prod_box_big"></div>
			<div class="center_prod_box_big">
							<div class="welc"><center>The Developer</center></div>
							<div class="welcsub"><center><p>the following students are rated PG.. :)<p></center></div>
				<div class='logreg'>
					<div class="loginb">
						<div class="center_prod_box">
						  <div class="product_img"><a><img src="images/6_10.gif" alt="" border="0" /></a></div>
						   <div class="product_img"><a><img src="images/6_12.gif" alt="" border="0" /></a></div>
						    <div class="product_img"><a><img src="images/6_14.gif" alt="" border="0" /></a></div>
						</div>
					</div>
					
				</div>
				
				<div class='developer'>
					<div class="loginc">
					<br><br>					
					<span class="blue">Nirajan Kumar Bista</span>   
					<br><br><br>					
					<span class="blue">Rohan KC</span> 
					<br><br><br>					
					<span class="blue">Rabin Ghimire</span> 	
					<br><br><br>					
					<span class="blue">Salim Maharjan</span> 				
				</div>
			  </div>
			   </div>
			<div class="bottom_prod_box_big"></div>
		  </div>
		 </div>
		<!-- end of it -->
		<!-- Script for Category lists toggle and fade-->
			<script type='text/javascript'>
					jQuery(document).ready( function() {
						
						//jQuery('.mandm').hide();
						jQuery('.history').hide();
						jQuery('.location').hide();
						jQuery('.contacts').hide();
						jQuery('.organization').hide();
						jQuery('.companyfeedback').hide();
						jQuery('.developer').hide();
						jQuery('.mandm').click( function() {
							jQuery('.mandms').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.loc').click( function() {
							jQuery('.location').toggle('slow');
							jQuery('.history').hide();
							jQuery('.mandms').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.hist').click( function() {
							jQuery('.history').toggle('slow');
							jQuery('.mandms').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.con').click( function() {
							jQuery('.contacts').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.mandms').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.org').click( function() {
							jQuery('.organization').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.mandms').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.developer').hide();
						});
						jQuery('.feed').click( function() {
							jQuery('.companyfeedback').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.mandms').hide();
							jQuery('.developer').hide();
						});
						jQuery('.dev').click( function() {
							jQuery('.developer').toggle('slow');
							jQuery('.history').hide();
							jQuery('.location').hide();
							jQuery('.contacts').hide();
							jQuery('.organization').hide();
							jQuery('.companyfeedback').hide();
							jQuery('.mandms').hide();
						});
					});
			</script>
		<!-- end of Script -->
    </div>
    <!-- end of center content -->
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <?php foothtml(); ?>
