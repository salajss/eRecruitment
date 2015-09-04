	<!--header-->
	<?php include_once('Header.php');?>
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
					<li><a href="../index.php">Home</a></li>
					<li><a href="Register_seeker.php"  class="active">POST RESUME</a></li>
					<li><a href="Register_Company.php">POST VACANCY</a></li>
					
					<li><a id="" href="gust/contact_us.php" class="btn" >Contact Us</a></li>
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
    <script type="text/javascript" language="javascript" src="../js/prototype.js"></script>
<script>
function msg(a)
{

					 var pars="Data="+a;
	// alert(pars);
        var url="location.php";
        var myAjax=new Ajax.Request(url,
        {
            method:'post',parameters:pars,onComplete:showResponseAdd
        });
	}
	
	function showResponseAdd(tst)
	{
	$('location').innerHTML=tst.responseText;
	}
	function msg1(a)
    {

		var pars="Data="+a;
	     // alert(pars);
        var url="specialization.php";
        var myAjax=new Ajax.Request(url,
        {
            method:'post',parameters:pars,onComplete:showResponseAdd1
        });
	}
	
	function showResponseAdd1(tst)
	{
	$('pgcourse').innerHTML=tst.responseText;
	}
</script>
<style type="text/css">
<!--
.style2 {font-size: 10px}
-->
</style>

	<div class="features">
		<div class="container">
			<div class="work-title">
				<h3>Job Seeker  Registration<span></span></h3>
			</div>
			<div class="features-info">
				<div class="features-text">
					<p><div id="company">
                    
<form action="Register_seeker.php" method="post" enctype="multipart/form-data">
                    
<div class="company_header">
                           <h4>Login Details</h4>
                         </div>
                         <div class="company_body">
                           <table width="636" border="0">
                             <tr>
                               <th width="376" height="34">* Email :</th>
                               <td width="250"><input type="text" name="email" id="email"></td>
                             </tr>
                             <tr>
                               <th height="39">* Password:</th>
                               <td><input type="password" name="password" id="password"></td>
                             </tr>
                             <tr>
                               <th height="39">* Confirm Password :</th>
                               <td><input type="password" name="confirm_password" id="confirm_password" /></td>
                             </tr>
                           </table>
            </div>
                <div class="company_header">
                           <h4>Your Contact Information</h4>
            </div>
   <div class="company_body">
                       <?php  
 include_once('../config/category.php');
 include_once('../config/country.php');
 $ob=new category();
 $res=$ob->select();
 $ob1=new country();
 $res1=$ob1->select();
 include_once('../config/seeker.php');
 $ob=new seeker();
 $ress=$ob->seeker_education();
		
?>
                           <table width="647" border="0">
                             <tr>
                               <th width="342" height="37">* Please mention your Full Name : :</th>
                               <td width="240"><input type="text" name="full_name" id="full_name"></td>
                             </tr>
                             <tr>
                               <th height="33">*Enter your Mobile number :</th>
                               <td><input type="text" name="mobile_no" id="mobile_no" /></td>
                             </tr>
                             <tr>
                               <th height="35">* Country</th>
                               <td><select name="country" id="country" onChange="msg(this.value)">
                               <option value="0">--select--</option>
                               <?php
							   while($r1=mysqli_fetch_array($res1))
							   {
							   ?>
                               <option value="<?php echo $r1['Id'];?>"><?php echo $r1['country'];?></option>
                               <?php }
                               ?>
                               </select>                               </td>
                             </tr>
                             <tr>
                               <th height="35">* Location :</th>
                               <td><select name="location" id="location">
                               <option value="0">--Select--</option>
                               </select>                               </td>
                             </tr>
                           </table>
            </div>
                        <div class="company_header">
                           <h4>Your Current Employment Details</h4>
            </div>
<div class="company_body">
                          <table width="722" border="0">
                            <tr>
                              <th width="371" height="40">How much work experience do you have?* </th>
                            <td width="341"><select name="EXPYEAR" id="expyear">
                                  <option value="-1" selected="selected">Select</option>
                                  <option value="99">Fresher</option>
                                  <option value="0" label="0">0</option>
                                  <option value="1" label="1">1</option>
                                  <option value="2" label="2">2</option>
                                  <option value="3" label="3">3</option>
                                  <option value="4" label="4">4</option>
                                  <option value="5" label="5">5</option>
                                  <option value="6" label="6">6</option>
                                  <option value="7" label="7">7</option>
                                  <option value="8" label="8">8</option>
                                  <option value="9" label="9">9</option>
                                  <option value="10" label="10">10+</option>
                                  
                                </select>
                              Years  <br /></td>
                            </tr>
                            <tr>
                              <th height="40">What are your Key Skills?*</th>
                              <td><input type="text" name="key_skill" id="key_skill">
                                Eg:</td>
                            </tr>
                          </table>
            </div>
                        <div class="company_header">
                          <h4>Your Education Background</h4>
            </div>
                        <div class="company_body">
                          <table width="722" border="0">
                            <tr>
                              <th height="40">Interested Industry*:</th>
                              <td><select name="industry[]" size="7" multiple id="industry">
                                 <?php while($r=mysqli_fetch_array($res)){
								  ?>
                                  <option value="<?php echo $r['Id'];?>"><?php echo $r['category'];?></option>
								  <?php
								  }
								  ?>
                               </select></td>
                            </tr>
                            <tr>
                              <th width="367" height="40">Please select your Basic Education* : </th>
                              <td width="345"><select name="education" id="education" onChange="msg1(this.value)">
                              <option value="0">--select--</option>
                            
                              <?php
							  while($rr=mysqli_fetch_array($ress))
							  {
							  ?>
                              <option value="<?php echo $rr['id']; ?>"><?php echo $rr['category']; ?></option>
                              <?php
							  }
							  ?>
                              </select>                              </td>
                            </tr>
                            <tr>
                              <th height="40"><label for="label" id="lbl_pgcourse">Please select your Masters Education :</label>
                                                             </th>
                              <td><select name="pgcourse" id="pgcourse">
                                
                              </select></td>
                            </tr>
                            <tr>
                              <th height="40"><label for="pgcourse" id="lbl_pgcourse">Enter the certificate course Details</label></th>
                              <td><textarea name="certification" id="certification" cols="45" rows="5"></textarea></td>
                            </tr>
                          </table>
            </div>
                        <div class="company_header">
                          <h4>Upload your detailed resume</h4>
            </div>
                        <div class="company_body">
                          <table width="722" border="0">
                            <tr>
                              <th width="363" height="40">Upload your Resume Document : </th>
                              <td width="349"><p>
                                <input type="file" name="resume" id="resume" />
                                </p>
                                <p class="style2">Supported Formats:  pdf Max file size: 300 Kb</p>
                              <p>&nbsp; </p></td>
                            </tr>
                          </table>
                        </div>
                        <p style="text-align:center"><input name="submit" type="submit" value="Submit"/></p>
                      </form>
                    </div>
					</p>
			  </div>
              <?php
			  if(isset($_POST['submit']))
			  {
			  
			  	$email=$_POST['email'];
				$password=$_POST['confirm_password'];
				//$sales=($_POST['sales']=='yes'?$_POST['sales_name']:'');
				$full_name=$_POST['full_name'];
				$category=implode(",",$_POST['industry']);
				$expyear=$_POST['EXPYEAR'];
				$location=$_POST['location'];
				$country=$_POST['country'];
				$key_skill=$_POST['key_skill'];
				$education=$_POST['education'];
				$pg=$_POST['PGCOURSE'];
				$certification=$_POST['certification'];
				$contact_no=$_POST['mobile_no'];
				$resume=$_FILES['resume']['name'];
				$f_type=$_FILES['resume']['type'];
				$f_size=$_FILES['resume']['size'];
				$type=3;
				$status=1;
				if($f_type=="application/pdf" && (($f_size/1024)<300) )
				{
				  
			  	include_once("../config/seeker.php");
				$ob=new seeker();
		$ob->insert_seeker($full_name,$contact_no,$country,$location,$expyear,$key_skill,$education,$pg,$certification,$resume,$category,$email,$password,$status,$type);
		move_uploaded_file($_FILES['resume']['tmp_name'],"../Resume/".$_FILES['resume']['name']);
				echo "<font color='blue'>Successfully Inserted</font>";
				echo '<a href="index.php">Login</a>';
			  }
			  else
			  {
			  echo "File Type Not Match";
			  echo $f_type;
			  }
			  }
			  ?>
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
	<div class="footer">
		<div class="container">
			<div class="footer-left"></div>
			<div class="footer-right">
				<p>© 2015 All rights reserved | Template by <a href="http://w3layouts.com/"> Salaj</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
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