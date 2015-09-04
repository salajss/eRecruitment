<?php
include_once("config.php");
class seeker
{
function insert_seeker($full_name,$mobile_number,$country,$location,$experience,$skill,$education,$master_education,$certification,$resume,$category,$email,$password,$status,$type)
	{
		$q1="insert into er_login(username,password,type,status)values('$email','$password',$type,$status)";
		$ob=new dbase();
		$ob->execute($q1);
		$login_id=mysqli_insert_id($ob->con);
		$qry="INSERT INTO `er_seeker` (`full_name`, `mobile_number`, `country`, `location`, `experience`, `skill`, `education`, `master_education`, `certification`,`login_id`) VALUES ('$full_name',$mobile_number,$country,$location,'$experience','$skill','$education','$master_education','$certification',$login_id)";
		$ob=new dbase();
		 $ob->execute($qry);
		 $user_id=mysqli_insert_id($ob->con);
		 $catid=explode(",",$category);
		 foreach($catid as $v)
		 {
		 $type=2;
		 $q1="INSERT INTO `er_user_category` (`category_id`, `user_id`, `type`) VALUES ($v,$user_id,$type)";
		 $ob=new dbase();
		 $ob->execute($q1);
		}
		$qr2="insert into er_files_details(user_id,file_type,file_name)values($user_id,1,'$resume')";
		$ob->execute($qr2);
	}
	function seeker_details($id)
	{
		$qry="select full_name,Id from er_seeker where login_id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function seeker_interview($id)
	{
		$qry="select i.interview_date,i.interview_time,i.interview_procedure,c.company_name,v.designation from er_interview i join er_vacancy v on i.vacancy_id=v.Id join er_company c on v.company_id=c.login_id join er_seeker s on i.candidate_id=s.login_id where s.login_id=$id and v.status=1 ";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function seeker_search($id)
	{
		$qry="select s.* from er_seeker s join er_user_category u on s.Id=u.user_id join er_category c on u.category_id=c.Id  where u.type=2 and c.Id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function seeker_shortlist($id)
	{
		$qry="select s.joining_details,v.designation,v.DesiredProfile,v.salary,c.company_name,s.created_date from er_shortlist s join er_vacancy v on s.vacancy_id=v.Id  join er_company c on s.company_id=c.login_id join er_seeker se on s.candidate_id=se.login_id where s.candidate_id=$id ";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function seeker_profile($id)
	{
		$qry="select s.*,e.id as ed,sp.id as sp,sp.specialise from er_seeker s join er_education e on s.education=e.id join er_specialise sp on s.master_education=sp.id where s.login_id=$id ";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function seeker_education()
	{
		$qry="select * from er_education";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function seeker_specific($id)
	{
		$qry="select * from er_specialise where education_id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function update_seeker($full_name,$mobile_number,$experience,$skill,$education,$master_education,$certification,$id)
	{
		echo $qry="update er_seeker set full_name='$full_name', mobile_number=$mobile_number,`experience`='$experience',`skill`='$skill', `education`='$education',`master_education`=$master_education,`certification`='$certification' where login_id=$id";
		$ob=new dbase();
		 $ob->execute($qry);
	}
	
}

?>