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
					<li><a href="../index.php" class="active" >Home</a></li>
					<li><a href="Register_seeker.php">POST RESUME</a></li>
					<li><a href="Register_Company.php">POST VACANCY</a></li>
					
					<li><a id="" href="contact_us.php" class="btn" >Contact Us</a></li>
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
				<h3> Vacancy<span></span> Details</h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<h4>&nbsp;</h4>
                    <?php
					
					$id=$_GET['t'];;
					include_once("../config/job.php");
				
					$ob1=new job();
				$result=$ob1->select_vacancy_details($id);
					$re=mysqli_fetch_array($result);
					?>
					<form name="form1" method="post" action="">
					  <table width="509" border="0">
                        <tr>
                          <td width="291" height="52"><strong>Designation</strong></td>
                          <td width="160"><?php echo $re['designation'];?></td>
                          <td width="36">&nbsp;</td>
                        </tr>
                        <tr>
                          <td><strong>Job Description</strong></td>
                          <td><?php echo $re['description'];?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="106"><strong>Desired Profile</strong></td>
                          <td><?php echo $re['DesiredProfile'];?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="44"><strong>Experience</strong></td>
                          <td><?php echo $re['experience'];?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="46"><strong>Role</strong></td>
                          <td><?php echo $re['role'];?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="54"><strong>Functional Area</strong></td>
                          <td><?php echo $re['functional_area'];?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="44"><strong>Qualification</strong></td>
                          <td><?php echo $re['category'];?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="51"><strong>Location</strong></td>
                          <td><?php echo $re['location'];?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="51"><strong>Salary</strong></td>
                          <td><?php echo $re['salary'];?></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3"><div align="center"><strong>
                           <a href="Register_seeker.php"><input type="button" name="button" id="button" value="Applay Now"></a>
                          </strong></div></td>
                        </tr>
                      </table>
                  </form>
                 
					<p>&nbsp;</p>
					<p>&nbsp;</p>
			  </div>
				<div class="features-icons">
				  <div class="clearfix"> </div>
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