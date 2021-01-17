<table border="1">
  <tr>
    <th>projects</th>
  </tr>
  
<?php
require '_lib/function.php';
$id=$_GET['id'];
$sql="SELECT freelancer.name ,projects.project_name from freelancer inner join projects
on freelancer.id=projects.freelancer_id and  freelancer.id=$id";
$res=mysqli_query($connect,$sql);
if(mysqli_num_rows($res)>0)
{
    while($rows=mysqli_fetch_array($res))
    {
        ?>

<tr>
    <td>
     <?= $rows['project_name']?>
    </td>
  
    </tr>
        <?php
    }

}
else
{
message_alert("freelance does not have projects",'alert danger');
}?>


</table>