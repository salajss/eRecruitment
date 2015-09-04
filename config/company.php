<?php
include_once("config.php");
class company
{
	function insert_company($company_name,$category_id,$company_description,$country,$location,$reg_no,$address,$sales_person,$first_name,$last_name,$designation,$contact_number,$username,$password,$type,$status)
	{
	$q1="insert into er_login(username,password,type,status)values('$username','$password',$type,$status)";
	$ob=new dbase();
	$ob->execute($q1);
	$login_id=mysqli_insert_id($ob->con);
	$qry="INSERT INTO `er_company` (`company_name`, `company_description`, `country`, `location`, `reg_no`, `address`, `sales_person`, `first_name`, `last_name`, `designation`, `contact_number`, `login_id`) VALUES ('$company_name','$company_description',$country,$location,'$reg_no','$address','$sales_person','$first_name','$last_name','$designation','$contact_number',$login_id)";
		$ob->execute($qry);
		$user_id=mysqli_insert_id($ob->con);
		 $catid=explode(",",$category_id);
		 foreach($catid as $v)
		 {
		 $type=2;
		 $q1="INSERT INTO `er_user_category` (`category_id`, `user_id`, `type`) VALUES ($v,$user_id,$type)";
		 $ob=new dbase();
		 $ob->execute($q1);
		}
	}
	function get_details()
	{
	$q="select c.company_name,c.reg_no,c.login_id,c.first_name,c.last_name,c.contact_number,c.company_description,c.address,c.designation,co.country,l.location from er_company c  join er_country co on c.country=co.Id join er_location l on c.location=l.id join er_login on c.login_id=er_login.login_id  where er_login.status=0 and er_login.type=2 ";
	$ob=new dbase();
	return $ob->execute($q);
	}
	function update_approve($id)
	{
	$q="update er_login set status=1 where login_id=$id";
	$ob=new dbase();
	return $ob->execute($q);
	}
	function update_reject($id)
	{
	$q="update er_login set status=-1 where login_id=$id";
	$ob=new dbase();
	return $ob->execute($q);
	}
	function get_details_company($id)
	{
	  $q="select er_category.category,er_category.Id from er_company join er_user_category on er_company.Id=er_user_category.user_id  join er_category on er_user_category.category_id=er_category.Id where er_company.login_id=$id";
	$ob=new dbase();
	return $ob->execute($q);
	}
	function profile_company($id)
	{
	  $q="select c.*,l.location,co.country  from er_company c join er_country co on c.country=co.Id join er_location l on c.location=l.id where c.login_id=$id";
	$ob=new dbase();
	return $ob->execute($q);
	}
	function update_company($first_name,$last_name,$designation,$contact_no,$company_id)
	{
	 echo  $q="update er_company set first_name='$first_name',last_name='$last_name',designation='$designation',contact_number='$contact_no' where login_id=$company_id";
	  $ob=new dbase();
	  return $ob->execute($q);
	}
}
?>