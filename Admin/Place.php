
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
					<li><a href="AdminHome.php" class="active">Home</a></li>
					<li><a href="Category.php">Category</a></li>
					<li><a href="Manage_Company.php">Manage Company</a></li>
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
	<div class="features">
		<div class="container">
			<div class="work-title">
				<h3>Location Management</h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<p><div id="company">
                    <?php 
					include_once('../config/category.php');
					$ob=new category();
					$ress=$ob->select_country();
					if(isset($_GET['t'])){ 
					$id=$_GET['t'];
					$res=$ob->edit_location($id);
                    $r=mysqli_fetch_array($res);
					}
					
					?>
<form method="post" action="">
                    
                         <div class="company_header">
                           <h4>&nbsp;</h4>
                         </div>
                         <div class="company_body">
                           <table width="564" border="0">
                             <tr>
                               <th width="226" height="62">* Country
                                 <input type="hidden" name="h1" value="<?php if(isset($r['id'])){ echo $r['id'];}else 
							   {echo "";}?>"/></th>
                               <td width="328"><select name="country" id="country">
                               <option value="" required>---select---</option>
                               <?php while($rr=mysqli_fetch_array($ress))
							   {
							   ?>
                               <option value="<?php echo $rr["Id"]; ?>" <?php if(isset($r['id'])){ echo ($r['country_id']==$rr['Id']?'selected':''); }?>><?php echo $rr["country"]; ?></option>
                               <?php
							   }
							   ?>
							   
                               </select>
                               </td>
                             </tr>
                             <tr>
                               <th height="62">Location</th>
                               <td><input type="text" name="location" id="location" value="<?php if(isset($r['location'])){ echo $r['location'];}?>" /></td>
                             </tr>
                             <tr>
                               <th height="37" colspan="2"><span style="text-align:center">
                                 <input name="submit" type="submit" value="Submit"/>
                               </span></th>
                             </tr>
</table>
            </div>
                        
                         <p style="text-align:center">&nbsp;</p>
</form>
<div class="company_header">
                           <h4>View All Category</h4>
                           <p>&nbsp;</p>
</div>
 <div class="company_body">
 <?php  
 include_once('../config/category.php');
 $ob=new category();
 $res=$ob->select_location();
		
?>

   <table width="583" border="1">
     <tr >
       <th width="311"align="center">Country Name</th>
       <th width="311"align="center">Location</th>
       <td width="136"></td>
       <td width="114">&nbsp;</td>
     </tr>
     <?Php while($r=mysqli_fetch_array($res))
	 {?>
     <tr align="center">
       <td><?php echo $r['country'];?></td>
        <td><?php echo $r['location'];?></td>
       <td><a href="Place.php?t=<?php echo $r['id'];?>"><img src="../images/edit.png" width="25px" height="25px" title="Edit"></a></td>
       <td><a href="Place_delete.php?t=<?php echo $r['id'];?>"><img src="../images/delete.png" width="25px" height="25px" title="Edit"></a></td>
     </tr>
     <?php }?>
   </table>
  
 </div>
                    </div>
					</p>
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
	<?php
	include_once("footer.php");
	?>
    
     <?php
	 if(isset($_POST['submit']))
	 {
	 include_once('../config/category.php');
		$ob=new category();
		$c=$_POST['country'];
		$l=$_POST['location'];
	 if($_POST['h1']!="")
	 {
	  $id=$_POST['h1'];
	  $ob->update_location($id,$c,$l);
	 echo '<script>window.location="Place.php";</script>';
	 }
else
{
	$ob->insert_location($c,$l);
	 echo '<script>window.location="Place.php";</script>';
	}
		
	 }
	?>
		<script type="text/javascript">
			$(document).ready(function() {
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
</body>
</html>	