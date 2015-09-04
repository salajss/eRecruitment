<?php
$user_id=$_GET['idd'];
include_once("../config/job.php");
$ob=new job();
$res=$ob->select_resume($user_id);
$r=mysqli_fetch_array($res);
$f="../Resume/".$r[0];
header("location:../Resume/$r[0]");
?>