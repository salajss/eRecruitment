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
					<li><a href="seekerHome.php">Home</a></li>
					<li><a href="vacancy.php" class="active">Vacancy</a></li>
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
    <?php
	include_once("../config/job.php");
	$ob=new job();
	$res=$ob->select_vacancy();
	?>
	<div class="features">
		<div class="container">
			<div class="work-title">
				<h3>LATEST Vacancies </h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<h4>&nbsp;</h4>
			  </div>
				<div class="features-icons">
					<div class="col-md-4 ftrs-icon-grids">
					  <?php while($r=mysqli_fetch_array($res)){
							
							 ?>
                             <p class="style5"><a href="vacancy_details.php?t=<?php echo $r['Id']; ?>"><h4><?php echo $r['company_name']."    requires    ".$r['designation'];?></h4></a>
                             </p>
                             <?php
							 }
							 ?>
					</div>
					</div>
				<div class="features-icons"><div class="col-md-4 ftrs-icon-grids">
				  <h5>FAST DELIVERY</h5>
						<p>There are many variations of passages of Lorem Ipsum available, even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
					</div>
					<div class="col-md-4 ftrs-icon-grids">
						<a href="#" class="ft-icons"> <img src="../images/icon8.png" alt="" title=""/> </a>
						<h5>RESEARCH</h5>
						<p>There are many variations of passages of Lorem Ipsum available, even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
					</div>
					<div class="col-md-4 ftrs-icon-grids">
						<a href="#" class="ft-icons"> <img src="../images/icon9.png" alt="" title=""/> </a>
						<h5>AWESOME SOLUTIONS</h5>
						<p>There are many variations of passages of Lorem Ipsum available, even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
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