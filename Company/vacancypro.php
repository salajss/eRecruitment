<?php
$id=$_POST['Data'];
include_once("../config/job.php");
$ob1=new job();
$result=$ob1->select_candidate_apply($id);
?>
<table width="771" border="1">
  <tr>
    <th width="86">Name</th>
    <th width="111">Skill</th>
    <td width="167">Experience</td>
    <td colspan="3">&nbsp;</td>
    
  </tr>
<?php
while($r=mysqli_fetch_array($result))
{
?>

  <tr>
    <td><?php echo $r['full_name'];?></td>
    <td><?php echo $r['skill'];?></td>
    <td><?php echo $r['experience'];?></td>
    <td width="164"><a href="resume.php?id=<?php echo $r['login_id'];?>">Resume</a></td>
    <td width="144"><a href="certificate.php?id=<?php echo $r['login_id'];?>">Certificate</a></td>
    <td width="133"><a href="sendinterviewcall.php?id=<?php echo $r['vacancy_id'];?>&&id1=<?php echo $r['login_id']; ?>&&apid=<?php echo $r['Id']; ?>">Send interview Call</a></td>
  </tr>
<?php
}
?>
</table>


