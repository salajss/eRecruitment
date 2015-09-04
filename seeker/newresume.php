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
				<h3>Update Resume</h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<h4>&nbsp;</h4>
                    <?php
					session_start();
					$user_id=$_SESSION['userid'];
					
					include_once("../config/seeker.php");
					$obj=new seeker();
					$ress=$obj->seeker_details($user_id);
					$rr=mysqli_fetch_array($ress);
					?>
					<form action="resumepro.php" method="post" enctype="multipart/form-data" name="form1">
					  <table width="509" border="0">
                        <tr>
                          <td height="20">&nbsp;</td>
                          <td><input type="hidden" name="user_id" value="<?php echo $rr['Id'];?>"/></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="247" height="52"><strong>Name</strong></td>
                          <td width="247"><?php echo $rr['full_name'];?></td>
                          <td width="1">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="42"><strong> Resume</strong></td>
                          <td><p>if you have any change in already uploaded resume,update your resume first</p>
                          <p><a href="resumeupdate.php?idd=<?php echo $user_id;?>">View your resume</a></p></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="106"><p><strong>New Resume</strong></p>                          </td>
                          <td><p>
                            <input type="file" name="resume" id="resume" />
                          </p>
                          <p> Resume must as pdf file</p></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3"><div align="center"><strong>
                           <input type="submit" name="button" id="button" value="Applay Now"/>
                          </strong></div></td>
                        </tr>
                      </table>
                  </form>
                 <?php
				 
				 ?>
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