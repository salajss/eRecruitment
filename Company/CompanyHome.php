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
					<li><a href="CompanyHome.php" class="active">Home</a></li>
					<li><a href="Add_vacancy.php">Vacancy</a></li>
					<li><a href="Applications.php">Applications</a></li>
					<li><a href="shotlistl.php">Shortlist</a></li>
					<li><a href="search_candidate.php">Search</a></li>
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
						<a href="manage_profile.php" class="ft-icons"> <img src="../images/icon/profile.png" alt="" title="" width="64px" height="64px"/> </a>
						<h5>PROFILE</h5>
				</div>
					<div class="col-md-4 ftrs-icon-grids">
						<a href="Add_vacancy.php" class="ft-icons"> <img src="../images/icon/vacancy.png" alt="" title="" width="64px" height="64px"/> </a>
						<h5>VACANCY</h5>
				</div>
					<div class="col-md-4 ftrs-icon-grids">
						<a href="Applications.php" class="ft-icons"> <img src="../images/icon/Candidate_Search-512.png" alt="" title="" width="64px" height="64px"/> </a>
						<h5>APPLICATIONS</h5>
				</div>
					<div class="clearfix"> </div>
				</div>
				<div class="features-icons">
					<div class="col-md-4 ftrs-icon-grids">
						<a href="shotlistl.php" class="ft-icons"> <img src="../images/icon/candidate.png" alt="" title="" width="64px" height="64px"/> </a>
						<h5>SHORTLIST</h5>
				  </div>
					
					<div class="col-md-4 ftrs-icon-grids">
						<a href="search_candidate.php" class="ft-icons"> <img src="../images/icon/Search.png" alt="" title="" width="64px" height="64px"/> </a>
						<h5>SEARCH</h5>
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