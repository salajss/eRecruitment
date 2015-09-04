<?php include_once("Header.php");?>
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
					<li><a href="seekerHome.php" class="active">Home</a></li>
					<li><a href="vacancy.php">Vacancy</a></li>
					<li><a href="Profile_update.php">Profile</a></li>
					<li><a href="interview.php">Interview</a></li>
					<li><a href="shortlist.php">Shortlist</a></li>
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
				<h3><span>FEATURES</span></h3>
			</div>
			<div class="features-info">
			  <div class="features-icons">
					<div class="col-md-4 ftrs-icon-grids">
						<a href="#" class="ft-icons"> <img src="../images/icon/vacancy.png" alt="" title="" width="64px" height="64px"/> </a>
						<h5>VACANCY</h5>
						<p>view and applay vacancy.</p>
					</div>
					<div class="col-md-4 ftrs-icon-grids">
						<a href="#" class="ft-icons"> <img src="../images/icon/interview-512.png" alt="" title="" width="64px" height="64px"/> </a>
						<h5>INTERVIEW</h5>
						<p>view interview call details</p>
					</div>
					<div class="col-md-4 ftrs-icon-grids">
						<a href="#" class="ft-icons"> <img src="../images/icon/profile.png" alt="" title="" width="64px" height="64px"/> </a>
						<h5>PROFILE</h5>
						<p>update profile</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="features-icons">
				  <div class="col-md-4 ftrs-icon-grids">
						<a href="#" class="ft-icons"> <img src="../images/icon/candidate.png" alt="" title="" width="64px" height="64px"/> </a>
						<h5>SHORTLIST</h5>
					  <p>view short listed details</p>
				  </div>
					
					<div class="clearfix"> </div>
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