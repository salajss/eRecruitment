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
				<h3>Post Vacancy<span></span></h3>
			</div>
			<div class="features-info">
				<div class="features-text">
					<h4>&nbsp;</h4>
                    <?php
					$company_id=$_SESSION['userid'];
					include_once("../config/country.php");
					include_once("../config/company.php");
					$ob=new country();
					$ob1=new company();
				$result=$ob1->get_details_company($company_id);
					$res=$ob->select_location_details();
					$res1=$ob->select_qualification();
					?>
					<form name="form1" method="post" action="">
					  <table width="509" border="0">
                        <tr>
                          <td width="291" height="50">Industry</td>
                          <td width="160"><select name="industry" id="industry">
                          <?php
						  while($re=mysqli_fetch_array($result))
						  {
						  
						  ?>
                          <option value="<?php echo $re['Id']; ?>"><?php echo $re['category']; ?></option>
                          <?php
						  }
						  ?>
                          </select> </td>
                          <td width="36">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="52">Designation</td>
                          <td><input type="text" name="designation" id="designation"></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>Job Description</td>
                          <td><textarea name="job_description" id="job_description" cols="45" rows="5"></textarea></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><strong>Job Profile</strong></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="106">Desired Profile</td>
                          <td><textarea name="desired_profile" id="desired_profile" cols="45" rows="5"></textarea></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="44">Experience</td>
                          <td><select name="experience" id="experience">
                          <option value="0">Fresher</option>
                          <?php
						  for($i=1;$i<=15;$i++)
						  {
						  	?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
						  }
						  ?>
                          </select>                          </td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="46">Role</td>
                          <td><input type="text" name="role" id="role"></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="54">Functional Area</td>
                          <td><input type="text" name="functional_area" id="functional_area"></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="28"><strong>Education</strong></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="44">Qualification</td>
                          <td><select name="qualification[]" size="5" id="qualification" multiple>
                          <?php
						  while($r1=mysqli_fetch_array($res1))
						  {
						  
						  ?>
                          <option value="<?php echo $r1['id']; ?>"><?php echo $r1['category']; ?></option>
                          <?php
						  }
						  ?>
                          </select>                          </td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="51">Location</td>
                          <td><select name="location" id="location">
                          <?php
						  while($r=mysqli_fetch_array($res))
						  {
						  
						  ?>
                          <option value="<?php echo $r['id']; ?>"><?php echo $r['location']; ?></option>
                          <?php
						  }
						  ?>
                          </select>                          </td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="51">Salary</td>
                          <td><input type="text" name="salary" id="salary"></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="51">Status</td>
                          <td><select name="status" id="status">
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                          </select>
                          </td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="3"><div align="center">
                              <input type="submit" name="button" id="button" value="Submit">
                          </div></td>
                        </tr>
                      </table>
                  </form>
                  <?php
				  if(isset($_POST['button']))
				  {
				  	include_once("../config/job.php");
					$obj=new job();
					$industry=$_POST['industry'];
					$designation=$_POST['designation'];
					$job_description=$_POST['job_description'];
					$desired_profile=$_POST['desired_profile'];
					$experience=$_POST['experience'];
					$role=$_POST['role'];
					$functional_area=$_POST['functional_area'];
					$qualification=implode(",",$_POST['qualification']);
					$location=$_POST['location'];
					$salary=$_POST['salary'];
					$status=$_POST['status'];
					$obj->insert_vacancy($industry,$designation,$job_description,$desired_profile,$experience,$role,$functional_area,$qualification,$location,$salary,$company_id,$status);
				  }
					
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