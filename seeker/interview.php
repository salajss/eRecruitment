
<?php  include_once("Header.php");?>
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
					<li><a href="vacancy.php">Vacancy</a></li>
					<li><a href="Profile_update.php">Profile</a></li>
					<li><a href="interview.php" class="active">Interview</a></li>
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
	$id=$_SESSION['userid'];
	include_once("../config/seeker.php");
	$ob=new seeker();
	$res=$ob->seeker_interview($id);
	?>
	<div class="features">
		<div class="container">
			<div class="work-title">
				<h3>Interview Call</h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<table width="777">
                    <tr>
                    <th width="122" height="47">Company Name</th>
                    <th width="92">Designation</th>
                    <th width="108">Interview Date</th>
                    <th width="132">Interview Time</th>
                    <th width="140">Interview  Procedures</th>
                    </tr>
					  <?php while($r=mysqli_fetch_array($res)){
							
							 ?>
                             <tr>
                             <td><?php echo $r['company_name'];?></td>
                              <td><?php echo $r['designation'];?></td>
                               <td><?php echo $r['interview_date'];?></td>
                                <td><?php echo $r['interview_time'];?></td>
                                <td><?php echo $r['interview_procedure'];?></td>
                             </tr>
                            
                             <?php
							 }
							 ?>
                             </table>
			  </div>
				<div class="features-icons">
					<div class="col-md-4 ftrs-icon-grids">
                    
					</div>
					</div>
				<div class="features-icons">
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