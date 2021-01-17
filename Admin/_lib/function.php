<?php
require 'config.php';
function settitle(){
    if (isset( $_GET['page'])){
        switch($_GET['page'])
        {
           case 'Createuser':
            echo 'Create User';
           break;
           case 'home':
            echo 'Dashboard';
           break;
           case 'controlfreelancer':
            echo 'Control Freelancer';
           break;
           case 'usermansgement':
            echo 'User Mansgement';
           break;
           case "edit_user":
            echo "Edit User";
          break;

           
       }
}
    else
    {
        echo 'Dashboard';
    }
    
}
function get_total($tbl)
{
    global $connect;
    $select="select count(*) from $tbl";

    $result=mysqli_query($connect,$select);
    $count=mysqli_fetch_array($result);
    echo $count[0];
}
function select_tbl($tbl){
    global $connect;
    $select="select * from $tbl";

$result=mysqli_query($connect,$select);
return $result;

}
function message_alert($text,$class){
    echo "<div class='alert $class' role='alert'>
    $text
</div>";

}