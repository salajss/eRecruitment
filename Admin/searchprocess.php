<?php
$a=$_POST['Data'];
include_once('../config/category.php');
 $ob=new category();
 $res=$ob->select_vacancy($a);
 if($res)
 {
 echo '<table border="1"><tr><th>Company Name</th><th>Designation</th><th>Description</th>';
while($r=mysqli_fetch_array($res))
{
echo '<tr><td>'.$r['company_name'].'</td><td>'.$r['designation'].'</td><td>'.$r['description'].'</td></tr>'; 
}
echo '</table>';
}
else
{
   echo "No data available";
}
?>