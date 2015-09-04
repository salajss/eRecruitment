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
                 <script type="text/javascript" language="javascript" src="../js/prototype.js"></script>
<script>
function msg(a)
{

					 var pars="Data="+a;
	// alert(pars);
        var url="searchpro.php";
        var myAjax=new Ajax.Request(url,
        {
            method:'post',parameters:pars,onComplete:showResponseAdd
        });
	}
	
	function showResponseAdd(tst)
	{
	$('details').innerHTML=tst.responseText;
	}
</script>
			</div>	
			<div class="clearfix"> </div>
		</div>	
	</div>

	<div class="features">
		<div class="container">
			<div class="work-title">
				<h3> Search candidate<span></span></h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<h4>&nbsp;</h4>
                    <?php
					
					$company_id=$_SESSION['userid'];
					include_once("../config/category.php");
					$ob1=new category();
					$res1=$ob1->select();
					?>
					<form name="form1" method="post" action="">
					  <table width="857" border="0">
                        <tr>
                          <td width="176">Category</td>
                          <td width="181"><select name="vacancy" id="vacancy" onChange="msg(this.value)">
                          <option value="">--select--</option>
                          <?php
						  while($r=mysqli_fetch_array($res1))
						  {
						  ?>
                          <option value="<?php echo $r['Id'];?>"><?php echo $r['category'];?></option>
                          <?php
						  }
						  ?>
                          </select>                          </td>
                          <td width="486">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
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