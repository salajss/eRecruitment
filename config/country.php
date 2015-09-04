<?php
include_once("config.php");
class country
{
	function select()
	{
		$qry="select * from er_country";
		$ob=new dbase();
		return $ob->execute($qry);
	
	}
	function select_location($cid)
	{
		$qry="select * from er_location where country_id=$cid";
		$ob=new dbase();
		return $ob->execute($qry);
	
	}
	function select_location_details()
	{
		$qry="select * from er_location order by location";
		$ob=new dbase();
		return $ob->execute($qry);
	}
	function select_qualification()
	{
		$qry="select * from er_education";
		$ob=new dbase();
		return $ob->execute($qry);
	}	
	
}

?>