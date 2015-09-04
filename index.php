<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Hospice a Medical Category Flat bootstrap Responsive website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>

<link type="text/css" rel="stylesheet" href="css/stylepop.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hospice Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style3 {
	color: #0000CC;
	font-weight: bold;
}
.style5 {
	color: #330066;
	font-weight: bold;
}
-->
</style>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="top-middle">
				<a href="index.html">
					<h3>On<em>Recruit</em></h3>
				</a>			</div>
	  <div class="top-nav">
				<span class="menu"><img src="images/menu-icon.png" alt=""/></span>		
				<ul class="nav1">
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="gust/Register_seeker.php">POST RESUME</a></li>
					<li><a href="gust/Register_Company.php">POST VACANCY</a></li>
					
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
    <script src="js/responsiveslides.min.js"></script>
			 <script>
				// You can also use "$(window).load(function() {"
				$(function () {
				  // Slideshow1
				  $("#slider3").responsiveSlides({
					auto: true,
					pager: false,
					nav: true,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					  $('.events').append("<li>before event fired.</li>");
					},
					after: function () {
					  $('.events').append("<li>after event fired.</li>");
					}
				  });
			
				});
			  </script>
	<!--//header-->
	<!--banner-->
	<div class="banner">
		<!--//End-slider-script -->
			
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<img src="images/carriers.jpg" alt="" title=""/ >					
					</li>
					<li>
						<img src="images/slide-1.jpg" alt="" title=""/ >
					</li>
                    <li>
						<img src="images/slide-3.jpg" alt="" title=""/ >
					</li>
                    <li>
						<img src="images/slide-4.jpg" alt="" title=""/ >
					</li>
				</ul>
			</div>
	</div>
	<div class="clearfix"> </div>
	<!--//banner-->
	<!--work-->
	<div class="work">
		<div class="container">

				<div id="top" class="callbacks_container">				  </div>
	  </div>
	</div>
<?php
include_once("config/job.php");
$ob=new job();
$res=$ob->select_vacancy();
?>

<div class="content">
		<div class="container">
			<div class="content-grids">
				<div class="col-md-8 humble">
			  <div class="col-md-6 humble-grids">
						<div class="content-left">
							<a href="images/img1.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
							<div class="b-wrapper">
									<h2 class="b-animate1 b-from-left    b-delay03 ">
										<img class="img-responsive" src="images/icon10.png" class="zoom" alt=""/>
									</h2>					
								</div>
							</a>
                            <img class="img-responsive" src="images/latest-vacancy-icon.png" alt=""  width="100" height="100"/>
							<h4>Latest Vacanies</h4>
							<?php while($r=mysqli_fetch_array($res)){
							
							 ?>
                             <p class="style5"><a href="gust/vacancy_details.php?t=<?php echo $r['Id']; ?>"><?php echo $r['company_name']."    requires    ".$r['designation'];?></a>
                             </p>
                             <?php
							 }
							 ?>
						  <a class="rd-more" href="singlepage.html">Read More</a>
						</div>
					</div>
					<div class="col-md-6 humble-grids">
						<div class="content-left">
							<a href="images/img37.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="images/latest-vacancy-icon.png" alt="" />
								<div class="b-wrapper">
									<h2 class="b-animate1 b-from-left    b-delay03 ">
										<img class="img-responsive" src="images/icon10.png" class="zoom" alt=""/>
									</h2>					
								</div>
							</a>
							<h4>Companies</h4>
							<p>Infosys is a global leader in consulting, technology, and outsourcing and next-generation services. We enable clients in more than 50 countries to outperform the competition and stay ahead of the innovation curve.</p>
							<p>UST Global® is a leading provider of end-to-end IT services and solutions for Global 1000 companies. We use a client-centric Global Engagement Model that combines local, senior, on-site resources with the cost, scale, and quality advantages of off-shore operations.</p>
						  <a class="rd-more" href="singlepage.html">Read More</a>
						</div>
					</div>
					<link rel="stylesheet" href="css/swipebox.css">
						<script src="js/jquery.swipebox.min.js"></script> 
						<script type="text/javascript">
							jQuery(function($) {
								$(".swipebox").swipebox();
							});
						</script>
					<div class="clearfix"> </div>
				</div>
		  <div class="col-md-4 testi">
					<div class="work-title testi-title">
						<h3>Sign In/Sign Up<span></span></h3>
				  </div>					
					<!--//End-slider-script -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 5
						  $("#slider5").responsiveSlides({
							auto: true,
							pager: false,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<div  id="top" class="callbacks_container">
					  <form name="form1" method="post" action="index.php">
					    <table width="422" border="0">
                        <tr>
                        <td colspan="3">
                    <?php
					 if(isset($_SESSION['error']))
					 {
					echo '<font color="red" size="4px" >'."Invalid Username Or Password".'</font>';
					session_destroy();
				}	
				//session_destroy();
				
					?></td>
                        </tr>
                          <tr>
                            <td width="174" height="54"><span class="style1">User Name</span></td>
                            <td width="227"><input type="text" name="username" id="username"></td>
                            <td width="7">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="50"><span class="style3">Password</span></td>
                            <td><input type="password" name="password" id="password"></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="3"><div align="center">
                                <p>
                                  <input type="submit" name="button" id="button" value="Submit">
                                </p>
                                </div></td>
                          </tr>
                          <tr>
                            <td colspan="2"><div align="left"><span class="style4"><a href="gust/Register_Company.php">Register As Company Now </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="gust/Register_seeker.php">Register As Job Seeker</a>
                              
                            </div></td>
                            <td>&nbsp;</td>
                          </tr>
                        </table>
                  </form>
					  <p>&nbsp;</p>
						<p>&nbsp;</p>
				  </div>
			  </div>	
				<div class="clearfix"> </div>
			</div>
		</div>	
	</div>
    <?php
    if(isset($_POST['button']))
	{
	    include_once("config/login.php");
		$ob=new login();
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$ob->check($user,$pass);
	}
	?>
	<!--//content-->
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				<a href="index.html">Hospice</a>
			</div>
			<div class="footer-right">
				<p>© 2015 All rights reserved | Template by <a href="http://w3layouts.com/"> W3layouts</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
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