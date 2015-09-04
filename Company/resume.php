<?php
$user_id=$_GET['id'];
include_once("../config/job.php");
$ob=new job();
$res=$ob->select_resume($user_id);
$n=mysqli_num_rows($res);
if($n>0)
{
$r=mysqli_fetch_array($res);
$f="../Resume/".$r[0];
header("location:../Resume/$r[0]");
}
else
{
  echo '<font color="red" size="15px">Resume Not Available</font>';
}
?>
