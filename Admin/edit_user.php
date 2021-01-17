<?php

    $id=$_GET['id'];
    $selct="select * from users where id ='$id'";
    $res = mysqli_query($connect,$selct);
    $user=mysqli_fetch_array($res);
   
    if(isset($_POST['submit']))
    {
        $firstname= $_POST['fname'];
        $lastname= $_POST['lname'];
        $email= $_POST['email'];
        $password= $_POST['pass'];
        $role= $_POST['role'];
        $_SESSION['name']=$firstname." ".$lastname;
    
        $update="update users set firstname='$firstname',lastname='$lastname',
        
            email='$email' , userpass='$password' ,role='$role' where id='$id' ";
        mysqli_query($connect,$update);
        message_alert('update Successfully','alert-success');
  
        //header('location:dashboard.php?page=usermansgement');
    }

?>



<form  method='post' >
    <div class="form-group">
            <label >First Name</label>
            <input type="text" class="form-control" name='fname' value='<?=$user['firstname'] ?>' id="fname" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
            <label>Last Name</label>
            <input  type="text" class="form-control" name='lname'  value='<?=$user['lastname'] ?>'  id="lname" aria-describedby="emailHelp">
           
        </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input  type="email" name='email' class="form-control" value='<?=$user['email'] ?>' id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input  type="password" name='pass' value='<?=$user['userpass'] ?>' class="form-control" id="pass">
</div>

<div class="form-group">
        <label for="exampleInputEmail1"> Role</label>
        <select class="form-control" name="role" >
        <?php
            if ($user['role']==1)
            {
                echo" <option value='2'>user</option>
                <option selected value='1'>admin</option>";
            }
            else
            {
                echo" <option selected value='2'>user</option>
                <option  value='1'>admin</option>";
            }
        
        ?>
               
               
                
        </select>     
    </div>


<button type="submit" id ="submit"  name='submit'  class="btn btn-lg btn-primary btn-block">Update</button>
</form>
