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
					<li><a href="CompanyHome.php">Home</a></li>
					<li><a href="Add_vacancy.php"  class="active">Vacancy</a></li>
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
				<h3>Interview Call</h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<h4>&nbsp;</h4>
                    <?php
					
					$company_id=$_SESSION['userid'];
					$vid=$_GET['id'];
					$user=$_GET['id1'];
					$apid=$_GET['apid'];
					include_once("../config/job.php");
					$ob1=new job();
					$ress=$ob1->select_vacancy_desig($vid);
					$r1=mysqli_fetch_array($ress);
					include_once("../config/seeker.php");
					$ob=new seeker();
					$res1=$ob->seeker_details($user);
					$rr=mysqli_fetch_array($res1);
					?>
					<form name="form1" method="post" action="interviewpro.php">
					  <table width="857" border="0">
                        <tr>
                          <td width="214" height="29">Vacancy</td>
                          <td width="143"><?php echo $r1['designation']; ?></td>
                          <td width="486"><input type="hidden" name="vacancy_id" id="vacancy_id" value="<?php echo $vid; ?>"></td>
                        </tr>
                        <tr>
                          <td height="33">Candidate Name</td>
                          <td><?php echo $rr['full_name'];?></td>
                          <td><input type="hidden" name="candidate_id" id="candidate_id" value="<?php echo $user; ?>"></td>
                        </tr>
                        <tr>
                          <td height="35">Interview date and Time</td>
                          <td><input type="date" name="interview_date" id="interview_date">Time<input type="time" name="interview_time" id="interview_time"></td>
                          <td><input type="hidden" name="apply_id" id="apply_id" value="<?php echo $apid; ?>"></td>
                        </tr>
                        <tr>
                          <td height="28">Interview Procedures</td>
                          <td><textarea name="in_procedure" id="in_procedure" cols="45" rows="5"></textarea></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2"><div align="center">
                            <input type="submit" name="button" id="button" value="Submit">
                          </div></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3"><div id="details"></div></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
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