
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
				<h3>Country Management</h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<p><div id="company">
                    <?php if(isset($_GET['t'])){ include_once('../config/category.php');
					$id=$_GET['t'];
					$ob=new category();
					$res=$ob->edit_country($id);
                    $r=mysqli_fetch_array($res);
					} ?>
<form method="post" action="">
                    
                         <div class="company_header">
                           <h4>&nbsp;</h4>
                         </div>
                         <div class="company_body">
                           <table width="564" border="0">
                             <tr>
                               <th width="226" height="62">* Country
                                 <input type="hidden" name="h1" value="<?php if(isset($r['Id'])){ echo $r['Id'];}else 
							   {echo "";}?>"/></th>
                               <td width="328"><input type="text" name="country" id="country" value="<?php if(isset($r['country'])){ echo $r['country'];}?>"></td>
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
 $res=$ob->select_country();
		
?>

   <table width="583" border="1">
     <tr >
       <th width="311"align="center">Category Name</th>
       <td width="136"></td>
       <td width="114">&nbsp;</td>
     </tr>
     <?Php while($r=mysqli_fetch_array($res))
	 {?>
     <tr align="center">
       <td><?php echo $r['country'];?></td>
       <td><a href="Country.php?t=<?php echo $r['Id'];?>"><img src="../images/edit.png" width="25px" height="25px" title="Edit"></a></td>
       <td><a href="country_delete.php?t=<?php echo $r['Id'];?>"><img src="../images/delete.png" width="25px" height="25px" title="Edit"></a></td>
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
	 if(isset($_POST['h1']))
	 {
	  $id=$_POST['h1'];
	  $ob->update_country($id,$c);
	  echo '<script>window.location="Country.php";</script>';
	 }
else
{
	$ob->insert_country($c);
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