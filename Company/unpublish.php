<?php
include_once("../config/job.php");
$ob1=new job();
if(isset($_GET['id']))
{
$id=$_GET['id'];
$s=0;
$result=$ob1->unpublish_vacancy($id,$s);
}
if(isset($_GET['id1']))
{
$id=$_GET['id1'];
$s=1;
$result=$ob1->unpublish_vacancy($id,$s);
}
header("location:update_vacancy.php");
?>