<?php
include_once("Header.php");?>
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
                 <script type="text/javascript" language="javascript" src="../js/prototype.js"></script>
<script>
function msg(a)
{

	var pars="Data="+a;
	// alert(pars);
        var url="shortlistpro.php";
        var myAjax=new Ajax.Request(url,
        {
            method:'post',parameters:pars,onComplete:showResponseAdd
        }
		);
}
	
	function showResponseAdd(tst)
	{
	$('candidate').innerHTML=tst.responseText;
	}
</script>
<script>
function check()
{	
	if(document.getElementByID('sh').checked==true)
	{
	 return true;
	}
	else
	{
	return false;
	}
}
</script>
                
				<!-- /script-for-menu -->
</div>	
			<div class="clearfix"> </div>
		</div>	
	</div>

	<div class="features">
		<div class="container">
			<div class="work-title">
				<h3>Shot Listed Candidates</h3>
		  </div>
			<div class="features-info">
				<div class="features-text">
					<h4>&nbsp;</h4>
                    <?php
					$company_id=$_SESSION['userid'];
					include_once("../config/job.php");
					$ob1=new job();
					$ress=$ob1->select_vacancy_shortist($company_id);
					?>
					<form name="form1" method="post" action="Shortlist_candidate.php" onSubmit="return check()">
					  <table width="857" border="0">
                        <tr>
                          <td width="214" height="29">Vacancy</td>
                          <td width="143"><select name="vacancy" size="1" id="vacancy" onChange="msg(this.value)">
                          <option value="">---select---</option>
                          <?php
						  while($r11=mysqli_fetch_array($ress))
						  {
						  ?>
                          <option value="<?php echo $r11["vacancy_id"];?>"><?php echo $r11["designation"];?></option>
                          <?php
						  }
						  ?>
                          </select>
                          </td>
                          <td width="486">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="33">Candidate Name</td>
                          <td><select name="candidate[]" size="5" multiple id="candidate">
                            </select></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="35">Short Listed</td>
                          <td><input type="checkbox" name="sh" id="sh">
                          Above selected candidates are short listed</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="28">Joining Details</td>
                          <td><textarea name="joining" id="joining"></textarea></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2"><div align="center">
                            <input type="submit" name="button" id="button" value="Submit">
                          </div></td>
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