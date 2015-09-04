<?php
$id=$_POST['Data'];
include_once("../config/seeker.php");
$ob1=new seeker();
$result=$ob1->seeker_search($id);
$n=mysqli_num_rows($result);
if($n>0)
{
?>
<table width="796" border="1">
  <tr>
    <th width="99">Name</th>
    <th width="191">Mobile_number</th>
    <th width="186">Experience</th>
    <th width="143">Skill</th>
    <th width="143">Resume</th>
    
  </tr>
<?php

while($r=mysqli_fetch_array($result))
{
?>

  <tr>
    <td><?php echo $r['full_name'];?></td>
    <td><?php echo $r['mobile_number'];?></td>
    <td><?php echo $r['experience'];?></td>
    <td><?php echo $r['skill'];?></td>
     <td><a href="resume.php?id=<?php echo $r['login_id'];?>">Resume</a></td>

  </tr>
<?php
}
?>
</table>
<?php
}
else
{
echo "No Data Available";
}
?>

