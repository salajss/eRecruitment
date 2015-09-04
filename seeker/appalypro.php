<?php
include_once("../config/job.php");
$user_id=$_POST['user_id'];
$vacancy_id=$_POST['vacancy_id'];
$marklist=$_FILES['marklist']['name'];
$size=$_FILES['marklist']['size'];
if($_FILES['marklist']['type']=="application/pdf"&& (($size/1024)<400))
{
$ob=new job();
$ob->applyjob($user_id,$vacancy_id,$marklist);
move_uploaded_file($_FILES['marklist']['tmp_name'],"../Marklist/".$marklist);
}
?>