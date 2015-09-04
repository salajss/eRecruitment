<?php
$user_id=$_GET['id'];
include_once("../config/job.php");
$ob=new job();
$res=$ob->select_certificate($user_id);
$r=mysqli_fetch_array($res);
$f="../Resume/".$r[0];
header("location:../Marklist/$r[0]");
?>