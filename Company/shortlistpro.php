<?php
$id=$_POST['Data'];
include_once("../config/job.php");
$ob1=new job();
$result=$ob1->select_shortist_vcandidate($id);
$n=mysqli_num_rows($result);
if($n>0)
{
while($r=mysqli_fetch_array($result))
{
?>
<option value="<?php echo $r['login_id'];?>"><?php echo $r['full_name'];?></option>
<?php
}
}
else
{
echo'<script>alert("No data found");</script>';
}
?>


