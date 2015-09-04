<?php
				  if(isset($_POST['button']))
				  {
				  	include_once("../config/job.php");
					$obj=new job();
					$apid=$_POST['apply_id'];
					$vacancy_id=$_POST['vacancy_id'];
					$candidate_id=$_POST['candidate_id'];
					$interview_date=$_POST['interview_date'];
					$interview_time=$_POST['interview_time'];
					$in_procedure=$_POST['in_procedure'];
				$obj->insert_interview($vacancy_id,$candidate_id,$interview_date,$interview_time,$in_procedure,$apid);
				
				  }
					
				  ?>
