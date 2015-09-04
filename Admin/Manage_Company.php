	<!--header-->
	<?php include_once('Header.php');?>
	<!--//header-->

</script>
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
					<li><a href="AdminHome.php">Home</a></li>
					<li><a href="Category.php">Category</a></li>
					<li><a href="Manage_Company.php" class="active">Manage Company</a></li>
					<li><a href="Register_Company.php">Register</a></li>
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
<style type="text/css">
<!--
.style1 {color: #CC0033}
-->
</style>

	<div class="features">
		<div class="container">
			<div class="work-title">
				<h3>Company Registration<span></span> Management</h3>
			</div>
             <?php  
 include_once('../config/company.php');
 $ob=new company();
 $res=$ob->get_details();
?>
			<div class="features-info">
				<div class="features-text">
					<p><div id="company">
                    
<form method="post" action="">
  <div class="company_body"></div>
  <?php if(mysqli_num_rows($res)>0)
  {
  ?>
            <table width="1004" border="1">
              <tr >
                &nbsp;<th height="41" colspan="5"><span class="style1">Company Details</span></th>
                  
                
                <th colspan="4"><span class="style1">Contact Details</span></th>
                <th colspan="4"></th>
                
              </tr>
              <tr >
                <th width="311"align="center">Company Name</th>
                
                <th width="311"align="center">Company Description</th>
                <th width="311"align="center">Registration Number</th>
                <th width="311"align="center">Address</th>
                <th width="311"align="center">First Name</th>
                <th width="311"align="center">last Name</th>
                <th width="311"align="center">Designation</th>
                <th width="311"align="center">Contact No</th>
                <th width="311"align="center">Country</th>
                <th width="311"align="center">Location</th>
                <td width="136"></td>
                <td width="114">&nbsp;</td>
              </tr>
              <?Php while($r=mysqli_fetch_array($res))
	 {?>
              <tr align="center">
                <td><?php echo $r['company_name'];?></td>

                <td><?php echo $r['company_description'];?></td>
                <td><?php echo $r['reg_no'];?></td>
                <td><?php echo $r['address'];?></td>
                <td><?php echo $r['first_name'];?></td>
                <td><?php echo $r['last_name'];?></td>
                <td><?php echo $r['designation'];?></td>
                <td><?php echo $r['contact_number'];?></td>
                <td><?php echo $r['country'];?></td>
                <td><?php echo $r['location'];?></td>
                <td><a href="Manage_Company.php?t=<?php echo $r['login_id'];?>"><img src="../images/128.png" alt="edit" width="25px" height="25px" title="Approve" /></a></td>
                <td><a href="Manage_Company.php?t1=<?php echo $r['login_id'];?>"><img src="../images/delete.png" alt="delete" width="25px" height="25px" title="Reject" /></a></td>
              </tr>
              <?php }?>
            </table>
            <?php
			}
		
            else
            {
				echo "<font color='#CC0033'>Companies are not waiting for approvel</font>";
            }
			
            ?>
            <p style="text-align:center">&nbsp;</p>
</form>
                    </div>
					</p>
			  </div>
             <p><div id="company">
                    <?php 
					if(isset($_GET['t']))
					{
					 include_once('../config/company.php');
					$id=$_GET['t'];
					$ob=new company();
					$ob->update_approve($id);
					echo '<script>window.location="Manage_Company.php";</script>';
					}
					if(isset($_GET['t1']))
					{
					 include_once('../config/company.php');
					$id=$_GET['t1'];
					$ob=new company();
					$ob->update_reject($id);
					echo '<script>window.location="Manage_Company.php";</script>';
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