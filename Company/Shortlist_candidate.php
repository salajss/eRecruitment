<?php

$company_id=$_SESSION['userid'];
$vacancy_id=$_POST['vacancy'];
$candidate_id=$_POST['candidate'];
$joining_details=$_POST['joining'];
include_once("../config/job.php");
$ob1=new job();
foreach($candidate_id as $v)
{
$ress=$ob1->insert_shortlist($vacancy_id,$v,$joining_details,$company_id);
}
echo '<script>window.location="shotlistl.php";</script>';
?>