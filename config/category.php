<?php
include_once("config.php");
class category
{
	function insert_category($c)
	{
		$qry="insert into er_category(category,status)values('$c',1)";
		$ob=new dbase();
		return $ob->execute($qry);
		
	}
	function select()
	{
		$qry="select * from er_category";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function edit_category($id)
	{
		$qry="select * from er_category where Id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function update_category($id,$n)
	{
		$qry="update   er_category set category='$n' where Id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function delete_category($id,$n)
	{
		$qry="delete from er_category where Id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_vacancy($id)
	{
		$qry="select v.designation,v.description,c.company_name from er_vacancy v join er_company c on v.company_id=c.login_id where v.category=$id and v.status=1";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	//country
	function insert_country($c)
	{
		echo $qry="insert into er_country(country)values('$c')";
		$ob=new dbase();
		return $ob->execute($qry);
		
	}
	function select_country()
	{
		$qry="select * from er_country";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function edit_country($id)
	{
		$qry="select * from er_country where Id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function update_country($id,$n)
	{
		echo $qry="update   er_country set country='$n' where Id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function delete_country($id)
	{
		$qry="delete from er_country where Id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	//place
		function insert_location($c,$l)
	{
		echo $qry="insert into er_location(country_id,location)values($c,'$l')";
		$ob=new dbase();
		return $ob->execute($qry);
		
	}
	function select_location()
	{
		$qry="select c.country,l.location,l.id from er_location l join er_country c on l.country_id=c.Id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function edit_location($id)
	{
		$qry="select * from er_location where id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function update_location($id,$n,$l)
	{
		echo $qry="update  er_location set country_id=$n,location='$l' where id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function delete_location($id)
	{
		$qry="delete from er_location where id=$id";
		$ob=new dbase();
		return $ob->execute($qry);
	}
}
?>