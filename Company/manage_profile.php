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
                    
                         <div class="company_header"></div>
<div class="company_header">
                           <h4>Company Details</h4>
            </div>
                        <div class="company_body">
                       <?php  
 include_once('../config/company.php');
 $ob1=new company();
 $company_id=$_SESSION['userid'];
 $res1=$ob1->profile_company($company_id);
 $r=mysqli_fetch_array($res1);
 $co=explode("-",trim($r['contact_number']));
 $t=str_replace('+', '', $co[0]);
 
 ?>
                           <table width="647" border="0">
                             <tr>
                               <th width="342" height="37">* Company Name :</th>
                               <td width="240"><?php echo $r['company_name'];?></td>
                             </tr>
                             <tr>
                               <th height="33">* Company Description :</th>
                               <td><?php echo $r['company_description'];?></td>
                             </tr>
                             <tr>
                               <th height="35">* Country</th>
                               <td><?php echo $r['country'];?></td>
                             </tr>
                             <tr>
                               <th height="35">* Location :</th>
                               <td><?php echo $r['location'];?></td>
                             </tr>
                             <tr>
                               <th height="47">* Company Registration No:</th>
                               <td><?php echo $r['reg_no'];?></td>
                             </tr>
                             <tr>
                               <th>* Address :</th>
                               <td><?php echo $r['address'];?></td>
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
                              <td width="396"><input type="text" name="first_name" id="first_name" value="<?php echo $r['first_name'];?>"></td>
                            </tr>
                            <tr>
                              <th height="40">* Last Name :</th>
                              <td><input type="text" name="last_name" id="last_name" value="<?php echo $r['last_name'];?>"></td>
                            </tr>
                            <tr>
                              <th height="36">* Designation :</th>
                              <td><input type="text" name="designation" id="designation" value="<?php echo $r['designation'];?>"></td>
                            </tr>
                            <tr>
                              <th height="39">* Contact Number :</th>
                              <td>+<input type="number" name="code" id="code" maxlength="4" width="35px" value="<?php echo $t;?>">
                              <input type="number" name="mobile" id="mobile" value="<?php echo $co[1];?>"></td>
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
			  $company_id=$_SESSION['userid'];
				$first_name=$_POST['first_name'];
				$last_name=$_POST['last_name'];
				$designation=$_POST['designation'];
				$contact_no='+'.$_POST['code']."-".$_POST['mobile'];
			  	include_once("../config/company.php");
				$ob=new company();
		$ob->update_company($first_name,$last_name,$designation,$contact_no,$company_id);
				echo '<script>window.location="manage_profile.php"</script>';
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