<?php
session_start();
include('include/header.php');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $i=0;
    if(empty($email))
    {
        $usererror=" please enter email";
        $i++;
    }
    if(empty($password))
    {
        $passerror=" please enter password";
        $i++;
    }

    if($i==0){
        $select="select * from users where email='$email' and userpass ='$password'";
        $result=mysqli_query($connect,$select);
        if(mysqli_num_rows($result)==1){
           $row= mysqli_fetch_array($result);
           $_SESSION['name']=$row['firstname']." ".$row['lastname'];
           $_SESSION['role']=$row['role'];
         
            header("location:dashboard.php");

        }
        else{
            $loginerror=" Invalid Email or Password ";
        }
}

}

?>
        <form class="login-form" action="" method='Post'>
            <h1 class="text-center">
                Admin Login
            </h1>
            <input type="text" name='email' class="form-control" placeholder="please enter Email">
             <span><?php if(isset($usererror))echo $usererror; ?></span>
             <input type="password"name ='password' class="form-control" placeholder="please enter password">
             <span><?php if(isset($passerror))echo $passerror; ?></span>
             <input type="submit" name='submit' value="login" class="btn btn-lg btn-primary btn-block">
             <span> <?php if(isset($loginerror)) echo $loginerror; ?> </span>
        </form>
        
     <?php
       include('include/footer.php');
       ?>