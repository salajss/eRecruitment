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
					<li><a href="seekerHome.php" >Home</a></li>
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
        var url="../gust/specialization.php";
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
				<h3>Profile<span></span></h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<p><div id="company">
                    <?php  
					   $id=$_SESSION['userid'];
 include_once('../config/seeker.php');
 include_once('../config/country.php');
 $ob=new seeker();
 $res=$ob->seeker_profile($id);
 $ress=$ob->seeker_education();
 $ob1=new country();
 $res1=$ob1->select();
 $rr=mysqli_fetch_array($res);
?>
<form action="" method="post" enctype="multipart/form-data">
<div class="company_body"></div>
<div class="company_header">
                           <h4>Your Contact Information</h4>
            </div>
   <div class="company_body">
                       
                           <table width="647" border="0">
                             <tr>
                               <th width="342" height="37">* Please mention your Full Name : :</th>
                               <td width="240"><input type="text" name="full_name" id="full_name" value="<?php echo $rr['full_name'];?>"></td>
                             </tr>
                             <tr>
                               <th height="33">*Enter your Mobile number :</th>
                               <td><input type="text" name="mobile_no" id="mobile_no" value="<?php echo $rr['mobile_number'];?>" /></td>
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
                                  <option value="99"<?php echo ($rr['experience']==99?'selected':'');?> >Fresher</option>
                                  <option value="0" label="0" <?php echo ($rr['experience']==0?'selected':'');?>>0</option>
                                  <option value="1" label="1" <?php echo ($rr['experience']==1?'selected':'');?>>1</option>
                                  <option value="2" label="2" <?php echo ($rr['experience']==2?'selected':'');?>>2</option>
                                  <option value="3" label="3" <?php echo ($rr['experience']==3?'selected':'');?>>3</option>
                                  <option value="4" label="4" <?php echo ($rr['experience']==4?'selected':'');?>>4</option>
                                  <option value="5" label="5" <?php echo ($rr['experience']==5?'selected':'');?>>5</option>
                                  <option value="6" label="6" <?php echo ($rr['experience']==6?'selected':'');?>>6</option>
                                  <option value="7" label="7" <?php echo ($rr['experience']==7?'selected':'');?>>7</option>
                                  <option value="8" label="8" <?php echo ($rr['experience']==8?'selected':'');?>>8</option>
                                  <option value="9" label="9" <?php echo ($rr['experience']==9?'selected':'');?>>9</option>
                                  <option value="10" label="10" <?php echo ($rr['experience']==10?'selected':'');?>>10+</option>
                                  
                                </select>
                              Years  <br /></td>
                            </tr>
                            <tr>
                              <th height="40">What are your Key Skills?*</th>
                              <td><input type="text" name="key_skill" id="key_skill" value="<?php echo $rr['skill'];?>">
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
                              <th width="367" height="40">Please select your Basic Education* : </th>
                              <td width="345"><select name="education" id="education" onChange="msg1(this.value)">
                              <option value="0">--select--</option>
                              <?php
							  while($rr1=mysqli_fetch_array($ress))
							  {
							  ?>
                              <option value="<?php echo $rr1['id']; ?>" <?php echo ($rr['ed']==$rr1['id']?'selected':'');?>><?php echo $rr1['category']; ?></option>
                              <?php
							  }
							  ?>
                              </select>                              </td>
                            </tr>
                            <tr>
                              <th height="40"><label for="label" id="lbl_pgcourse">Please select your Masters Education :</label>
                                                             </th>
                              <td><select name="PGCOURSE" id="pgcourse">
                                <option value="<?php echo $rr['sp'];?>" ><?php echo $rr['specialise'];?></option>
                                
                              </select></td>
                            </tr>
                            <tr>
                              <th height="40"><label for="pgcourse" id="lbl_pgcourse">Enter the certificate course Details</label></th>
                              <td><textarea name="certification" id="certification" cols="45" rows="5"><?php echo $rr['certification'];?></textarea></td>
                            </tr>
                          </table>
            </div>
                        <div class="company_body"></div>
            <p style="text-align:center"><input name="submit" type="submit" value="Submit"/></p>
                      </form>
                    </div>
					</p>
			  </div>
              <?php
			  if(isset($_POST['submit']))
			  {
			  
			  	//$email=$_POST['email'];
				//$password=$_POST['confirm_password'];
				//$sales=($_POST['sales']=='yes'?$_POST['sales_name']:'');
				$full_name=$_POST['full_name'];
				//$category=implode(",",$_POST['industry']);
				$expyear=$_POST['EXPYEAR'];
				//$location=$_POST['location'];
				//$country=$_POST['country'];
				$key_skill=$_POST['key_skill'];
				$education=$_POST['education'];
				$pg=$_POST['PGCOURSE'];
				$certification=$_POST['certification'];
				$contact_no=$_POST['mobile_no'];
				//$resume=$_FILES['resume']['name'];
				//$f_type=$_FILES['resume']['type'];
				//$f_size=$_FILES['resume']['size'];
				//$type=3;
				//$status=1;
				//if($f_type=="application/pdf" && (($f_size/1024)<300) )
				//{
				$id=$_SESSION['userid'];
			  	include_once("../config/seeker.php");
				$ob=new seeker();
		$ob->update_seeker($full_name,$contact_no,$expyear,$key_skill,$education,$pg,$certification,$id);
			 // }
			  /*else
			  {
			  echo "File Type Not Match";
			  echo $f_type;
			  }*/
			  echo '<script>window.location="Profile_update.php";</script>';
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