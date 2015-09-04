<?php
class dbase
{
public $con,$res;
	function __construct()
	{
		$this->con=mysqli_connect("localhost","root","","e-recruit");
		
	}
	function execute($qry)
	{
		return $this->res=mysqli_query($this->con,$qry);
	}
}
?>