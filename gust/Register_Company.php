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
					<li><a href="../index.php" >Home</a></li>
					<li><a href="Register_seeker.php">POST RESUME</a></li>
					<li><a href="Register_Company.php" class="active">POST VACANCY</a></li>
					
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
</script>
	<div class="features">
		<div class="container">
			<div class="work-title">
				<h3>Company Registration<span></span></h3>
			</div>
			<div class="features-info">
				<div class="features-text">
					<p><div id="company">
                    
<form method="post" action="">
                    
                         <div class="company_header">
                           <h4>Login Details</h4>
                         </div>
                         <div class="company_body">
                           <table width="564" border="0">
                             <tr>
                               <th width="318" height="34">* Email :</th>
                               <td width="236"><input type="text" name="email" id="email"></td>
                             </tr>
                             <tr>
                               <th height="39">* Password:</th>
                               <td><input type="password" name="password" id="password"></td>
                             </tr>
                             <tr>
                               <th height="39">* Confirm Password :</th>
                               <td><input type="password" name="confirm_password" id="confirm_password" /></td>
                             </tr>
                             <tr>
                               <th height="34">* Are you in touch with any Sales Person :</th>
                               <td><input type="radio" name="sales" id="sales" value="yes">
                                 Yes
                                   <input type="radio" name="sales" id="sales2" value="no">
                                   No</td>
                             </tr>
                             <tr id="disp">
                             <th >* Sales Person Name :</th>
                            <td><input type="text" name="sales_name" id="sales_name"></td>
                           </table>
            </div>
                <div class="company_header">
                           <h4>Company Details</h4>
            </div>
                        <div class="company_body">
                       <?php  
 include_once('../config/category.php');
 include_once('../config/country.php');
 $ob=new category();
 $res=$ob->select();
 $ob1=new country();
 $res1=$ob1->select();
		
?>
                           <table width="647" border="0">
                             <tr>
                               <th width="342" height="37">* Company Name :</th>
                               <td width="240"><input type="text" name="company_name" id="company_name"></td>
                             </tr>
                             <tr>
                               <th height="79">* Industry:</th>
                               <td><select name="industry[]" size="7" multiple id="industry">
                                 <?php while($r=mysqli_fetch_array($res)){
								  ?>
                                  <option value="<?php echo $r['Id'];?>"><?php echo $r['category'];?></option>
								  <?php
								  }
								  ?>
                               </select>                               </td>
                             </tr>
                             <tr>
                               <th height="33">* Company Description :</th>
                               <td><textarea name="company_description" id="company_description" cols="45" rows="5"></textarea></td>
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
                               </select>
                               </td>
                             </tr>
                             <tr>
                               <th height="35">* Location :</th>
                               <td><select name="location" id="location">
                               <option value="0">--Select--</option>
                               </select>                               </td>
                             </tr>
                             <tr>
                               <th height="47">* Company Registration No:</th>
                               <td><input type="text" name="registration_no" id="registration_no"></td>
                             </tr>
                             <tr>
                               <th>* Address :</th>
                               <td><textarea name="address" id="address" cols="45" rows="5"></textarea></td>
                             </tr>
                           </table>
            </div>
                        <div class="company_header">
                           <h4>Contact Details</h4>
            </div>
                        <div class="company_body">
                          <table width="722" border="0">
                            <tr>
                              <th width="316" height="40">* First Name :</th>
                              <td width="396"><input type="text" name="first_name" id="first_name"></td>
                            </tr>
                            <tr>
                              <th height="40">* Last Name :</th>
                              <td><input type="text" name="last_name" id="last_name"></td>
                            </tr>
                            <tr>
                              <th height="36">* Designation :</th>
                              <td><input type="text" name="designation" id="designation"></td>
                            </tr>
                            <tr>
                              <th height="39">* Contact Number :</th>
                              <td>+<input type="number" name="code" id="code" maxlength="4" width="35px">
                              <input type="number" name="mobile" id="mobile"></td>
                            </tr>
                            <tr>
                              <th height="39">* Captcha Verification:</th>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
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
				$sales=($_POST['sales']=='yes'?$_POST['sales_name']:'');
				$company_name=$_POST['company_name'];
				$category=implode(",",$_POST['industry']);
				$company_description=$_POST['company_description'];
				$location=$_POST['location'];
				$country=$_POST['country'];
				$registration_no=$_POST['registration_no'];
				$address=$_POST['address'];
				$first_name=$_POST['first_name'];
				$last_name=$_POST['last_name'];
				$designation=$_POST['designation'];
				$contact_no='+'.$_POST['code']."-".$_POST['mobile'];
				$type=2;
				$status=0;
			  	include_once("../config/company.php");
				$ob=new company();
		$ob->insert_company($company_name,$category,$company_description,$country,$location,$registration_no,$address,$sales,$first_name,$last_name,$designation,$contact_no,$email,$password,$type,$status);
				
			  }
			  ?>
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