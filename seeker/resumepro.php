<?php
include_once("../config/job.php");
$user_id=$_POST['user_id'];
$marklist=$_FILES['resume']['name'];
$size=$_FILES['resume']['size'];
if($_FILES['resume']['type']=="application/pdf"&& (($size/1024)<400))
{
$ob=new job();
$ob->applyjob($user_id,$vacancy_id,$marklist);
move_uploaded_file($_FILES['marklist']['tmp_name'],"../Marklist/".$marklist);
}
?>