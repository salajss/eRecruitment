<?php
$id=$_POST['Data'];
include_once("../config/job.php");
$ob1=new job();
$result=$ob1->select_vacancy_update($id);
$n=mysqli_num_rows($result);
if($n>0)
{
?>
<table width="200" border="1">
  <tr>
    <th>Designation</th>
    <th>DesiredProfile</th>
    <th>Experience</th>
    <th>Salary</th>
     <th>Status</th>
    <th>Created Date</th>
    <th></th>
    
  </tr>
<?php

while($r=mysqli_fetch_array($result))
{
?>

  <tr>
    <td><?php echo $r['designation'];?></td>
    <td><?php echo $r['DesiredProfile'];?></td>
    <td><?php echo $r['experience'];?></td>
    <td><?php echo $r['salary'];?></td>
    <td><?php echo ($r['status']==0)?"<font color='red'>Unpublish</font>":"<font color='green'><b>Publish</b></font>"?></td>
    <td><?php echo $r['created_date'];?></td>    
    <td><?php if($r['status']==1){?><a href="unpublish.php?id=<?php echo $r['Id'];?>">Unpublish</a><?php } else {?><a href="unpublish.php?id1=<?php echo $r['Id'];?>">Publish</a><?php }?></td>
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

