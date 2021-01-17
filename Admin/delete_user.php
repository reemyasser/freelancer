<?php

function delete($cur){
    global $connect;
$id=$cur;
$deluser="delete from users where id='$id'";
mysqli_query($connect,$deluser);
//header("location:dashboard.php?page=usermansgement");
}

    


?>


