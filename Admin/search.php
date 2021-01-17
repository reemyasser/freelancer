<?php
require "_lib/function.php";
if(isset($_GET['k']))
{
    $name="%". $_GET['k']."%";
   $sql="SELECT * from users where firstname like '$name'";
   $res=mysqli_query($connect,$sql);
   if(mysqli_num_rows($res) > 0)
   {
        while($rows=mysqli_fetch_array($res)){
            ?>

            <table border="1">
                <tr>
                    <td>
                        <?=$rows['firstname'] ?>
                        
                    </td>
                    <td><?= $rows['email'] ?></td>
                </tr>
            </table>
            
            <?php
        }
   }
   else{
       message_alert("NO RESULT FOUND ","alert-danger");
       }
}?>