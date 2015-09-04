<?php
include_once("config.php");
class job
{
	function insert_vacancy($category,$designation,$description,$DesiredProfile,$experience,$role,$functional_area,$qualification,$location,$salary,$company_id,$status)
	{
		$qry="INSERT INTO `er_vacancy` (`category`,designation,`description`, `DesiredProfile`, `experience`, `role`, `functional_area`, `qualification`, `location`, `salary`, `company_id`, `status`) VALUES ($category,'$designation','$description','$DesiredProfile',$experience,'$role','$functional_area','$qualification',$location,'$salary',$company_id,'$status')";
		$ob=new dbase();
		return $ob->execute($qry);
	
	}
	function insert_shortlist($vacancy_id,$candidate_id,$joining_details,$company_id)
	{
		$qry="INSERT INTO `er_shortlist` (`vacancy_id`, `candidate_id`, `joining_details`, `company_id`) VALUES ('$vacancy_id', '$candidate_id', '$joining_details', '$company_id')";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_vacancy()
	{
		$qry="select er_vacancy.Id,er_vacancy.designation,er_company.company_name from er_vacancy join er_company on er_vacancy.company_id=er_company.login_id  where er_vacancy.status=1";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_vacancy_details($id)
	{
		$qry="select er_vacancy.*,er_company.company_name, er_location.location,er_education.category from er_vacancy join er_company on er_vacancy.company_id=er_company.login_id  join er_education  on er_vacancy.qualification=er_education.id join er_location on er_vacancy.location=er_location.id where er_vacancy.Id=$id ";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function applyjob($user_id,$vacancy_id,$filename)
	{
		$qry="insert into er_applay(vacancy_id,user_id,status)values($vacancy_id,$user_id,1)";
		$ob=new dbase();
		$ob->execute($qry);
		$qry="insert into er_files_details(user_id,file_type,file_name)values($user_id,2,'$filename')";
		$ob->execute($qry);
	}
	function resume($user_id,$filename)
	{
		$ob=new dbase();
		$ft=1;
		$qry="CALL select_or_insert($ft,$user_id,$filename)";
		//$qry="select * from er_files_details where file_type=$ft and user_id=$user_id";
		$res=$ob->execute($qry);
		/*$n=mysqli_num_rows($res);
		if($n>0)
		{
			$qq="update er_files_details set file_name='$filename' where file_type=$ft and user_id=$user_id";
			$ob->execute($qry);
		}
		else
		{
			$qq="insert into er_files_details (user_id,file_type,file_name) values ($user_id,$ft,'$filename')";
			$ob->execute($qry);
		}*/
	}
	function select_resume($id)
	{
		$qry="select  f.file_name from er_files_details f join er_seeker s on f.user_id=s.Id where f.file_type=1 and s.login_id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_vacancy_company($id)
	{
		$qry="select Id,designation from er_vacancy where company_id=$id and status=1";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_candidate_apply($id)
	{
		$qry="select s.full_name,s.skill,s.experience,s.login_id,a.vacancy_id,a.Id from er_seeker s join er_applay a on s.Id=a.user_id where a.vacancy_id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_certificate($id)
	{
		$qry="select  f.file_name from er_files_details f join er_seeker s on f.user_id=s.Id where f.file_type=2 and s.login_id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	
	function select_vacancy_desig($id)
	{
		$qry="select Id,designation from er_vacancy where Id=$id and status=1";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function insert_interview($vacancy_id,$user_id,$interview_date,$interview_time,$interview,$apid)
	{
		$qry="INSERT INTO `er_interview` (`vacancy_id`, `candidate_id`, `interview_date`, `interview_time`, `interview_procedure`) VALUES ( '$vacancy_id', '$user_id', '$interview_date', '$interview_time', '$interview');";
		$ob=new dbase();
		$ob->execute($qry);
		$q1="UPDATE `er_applay` SET `status` = '2' WHERE `Id` = $apid;";
		$ob->execute($q1);
	}
	function select_vacancy_shortist($id)
	{
		$qry="select v.designation,i.Id,i.vacancy_id from er_interview i join er_vacancy v on i.vacancy_id=v.Id where v.company_id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_shortist_vcandidate($id)
	{
		$qry="select s.full_name,s.login_id from er_interview i join er_seeker s  on i.candidate_id=s.login_id where i.vacancy_id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_vacancy_search($id)
	{
		$qry="select Id,designation from er_vacancy where company_id=$id ";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_vacancy_update($id)
	{
		$qry="select v.*  from er_vacancy v join er_company c  on v.company_id=c.login_id where c.Id=$id ";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function unpublish_vacancy($id,$s)
	{
		$qry="update  er_vacancy  set status=$s where Id=$id ";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function applycheck($user_id,$vacancy_id)
	{
		$qry="select * from er_applay where vacancy_id=$vacancy_id and user_id=$user_id ";
		$ob=new dbase();
		$res=$ob->execute($qry);
		if($res)
		{
		  return 1;
		}
		else
		{
		return 0;
		}
		
	}
	
}
?>