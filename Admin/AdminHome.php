<?php

include_once("Header.php");?>
	<!--//header-->
    <body>
<div class="header">
		<div class="container">
			<div class="top-middle">
				<a href="../index.html">
					<h3>onRecruit</h3>
				</a>	
			</div>
			<div class="top-nav">
				<span class="menu"><img src="../images/menu-icon.png" alt=""/></span>		
				<ul class="nav1">
					<li><a href="AdminHome.php" class="active">Home</a></li>
					<li><a href="Category.php">Category</a></li>
					<li><a href="Manage_Company.php" >Manage Company</a></li>
					<li><a href="Register_Company.php">Register</a></li>
					<li><a href="../logout.php" >Logout</a></li>
				</ul>
				<!-- script-for-menu -->
				 <script>
				   $( "span.menu" ).click(function() {
					 $( "ul.nav1" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
				<!-- /script-for-menu -->
			</div>	
			<div class="clearfix"> </div>
		</div>	
	</div>
	<div class="features">
		<div class="container">
			<div class="work-title">
				<h3>&nbsp;</h3>
		  </div>
			<div class="features-info">
			  <div class="features-icons">
					<div class="col-md-4 ftrs-icon-grids">
						<a href="search.php" class="ft-icons"> <img src="../images/icon/Search.png" alt="" title="search" width="64px" height="64px" /> </a>
						<h5>SEARCH CANDIDATE</h5>
						<p>Seach  vacany details based on industry.</p>
				</div>
					<div class="col-md-4 ftrs-icon-grids">
						<a href="Register_Company.php" class="ft-icons"> <img src="../images/icon/creg.jpg" alt="" title=" Company Registration" width="64px" height="64px"/> </a>
						<h5>Register New Company</h5>
						<p>Register new company </p>
				</div>
					<div class="col-md-4 ftrs-icon-grids">
						<a href="Category.php" class="ft-icons"> <img src="../images/icon/images.jpg" alt="" title="Manage category" width="64px" height="64px"/> </a>
						<h5>Manage Category</h5>
						<p>You can manage category or industry .</p>
				</div>
					<div class="clearfix"> </div>
				</div>
				<div class="features-icons">
					<div class="col-md-4 ftrs-icon-grids">
						<a href="Country.php" class="ft-icons"> <img src="../images/icon/Web-icon.png" alt="" title="Manage country and location" width="64px" height="64px"/> </a>
						<h5>Country</h5>
						<p>Admin can mange country  details.</p>
				  </div>
					<div class="col-md-4 ftrs-icon-grids">
						<a href="Manage_Company.php" class="ft-icons"> <img src="../images/icon/256.png" alt="" title="view company cdetails" width="64px" height="64px"/> </a>
						<h5>MANAGE COMPANY</h5>
						<p>Admin can approve or block registered companies.</p>
					</div>
					<div class="clearfix">
					  <div class="col-md-4 ftrs-icon-grids"> <a href="Place.php" class="ft-icons"> <img src="../images/icon/download.png" alt="" title="view company cdetails" width="64px" height="64px"/> </a>
                          <h5>MANAGE LOCATION</h5>
					      <p>Admin manage location details.</p>
				      </div>
</div>
				</div>					
			</div>
		</div>
	</div>	
	<!--footer-->
	<?php include_once("footer.php");?>
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
</body>
</html>	
