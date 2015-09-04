
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
					<li><a href="../logout.php">Logout</a></li>
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
				<h3>Search vacancy</h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<p><div id="company">
                    <?php 
					include_once('../config/category.php');
					$ob=new category();
					$ress=$ob->select();
					?>
                    <script type="text/javascript" language="javascript" src="../js/prototype.js"></script>
<script>
function msg(a)
{
		 var pars="Data="+a;
        var url="searchprocess.php";
        var myAjax=new Ajax.Request(url,
        {
            method:'post',parameters:pars,onComplete:showResponseAdd
        });
	}
	
	function showResponseAdd(tst)
	{
	$('dd1').innerHTML=tst.responseText;
	}
</script>
<form method="post" action="">
                    
                         <div class="company_header">
                           <h4>&nbsp;</h4>
                         </div>
                         <div class="company_body">
                           <table width="564" border="0">
                             <tr>
                               <th width="226" height="62">* Category
                                 </th>
                               <td width="328"><select name="category" id="category" onChange="msg(this.value)">
                               <option value="" required>---select---</option>
                               <?php while($rr=mysqli_fetch_array($ress))
							   {
							   ?>
                               <option value="<?php echo $rr["Id"]; ?>"><?php echo $rr["category"]; ?></option>
                               <?php
							   }
							   ?>
							   
                               </select>                               </td>
                             </tr>
                             <tr>
                               <td height="62" colspan="2"><div id="dd1"></div></td>
                             </tr>
                             <tr>
                               <th height="37" colspan="2">&nbsp;</th>
                             </tr>
</table>
            </div>
                        
                         <p style="text-align:center">&nbsp;</p>
</form>
<div class="company_header">
                           <h4>&nbsp;</h4>
            <p>&nbsp;</p>
</div>
 <div class="company_body"></div>
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
	<script type="text/javascript">
			$(document).ready(function() {
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
	<!--//smooth-scrolling-of-move-up-->
</body>
</html>	