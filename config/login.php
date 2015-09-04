<?php
include_once("config.php");
class login
{
function check($username,$password)
{
	  $q="select * from er_login where username='$username'and password='$password'";
	  $ob=new dbase();
	$res= $ob->execute($q);
	if(mysqli_num_rows($res)>0)
	{
		$r=mysqli_fetch_array($res);
		
		$_SESSION['userid']=$r['login_id'];
		if($r['type']==1)
		{
		 echo '<script>window.location="Admin/AdminHome.php";</script>';
		  //header("location:../Admin/AdminHome.php");
		}
		if($r['type']==2)
		{
		 echo '<script>window.location="Company/CompanyHome.php";</script>';
		  //header("location:../Company/CompanyHome.php");
		}
		if($r['type']==3)
		{
		 echo '<script>window.location="seeker/SeekerHome.php";</script>';
		  //header("location:../seeker/SeekerHome.php");
		}
		//return $n=1;
		
	}
	else
	{
	$_SESSION['error']="Invalid Username or Password";
	echo '<script>window.location="index.php";</script>';
	}
}
}
?>