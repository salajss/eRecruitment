<?php
 include_once('../config/category.php');
 $id=$_GET['t'];
 $ob=new category();
 $res=$ob->delete_location($id);
 header("location:Place.php");
?>