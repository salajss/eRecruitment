<?php
$a=$_POST['Data'];
include_once('../config/seeker.php');
 $ob=new seeker();
 $res=$ob->seeker_specific($a);
 echo '<option value="0">--Select--</option>';
while($r=mysqli_fetch_array($res))
{
echo '<option value="'.$r['id'].'">'.$r['specialise']."</option>"; 
}
?>