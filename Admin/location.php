<?php
$a=$_POST['Data'];
include_once('../config/country.php');
 $ob=new country();
 $res=$ob->select_location($a);
 echo '<option value="0">--Select--</option>';
while($r=mysqli_fetch_array($res))
{
echo '<option value="'.$r['id'].'">'.$r['location']."</option>"; 
}
?>