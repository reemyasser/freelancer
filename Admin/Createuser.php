<?php
if($_SESSION['role']==2){
header("location:dashboard.php");
}
if(isset($_POST['submit'])){
$firstname= $_POST['fname'];
$lastname= $_POST['lname'];
$email= $_POST['email'];
$password= $_POST['pass'];
$role= $_POST['role'];
$sqlcomp="SELECT email from users where email ='$email'";
$res=mysqli_query($connect,$sqlcomp);
if(mysqli_num_rows($res)>0 ){
  message_alert(' Email is exist !','alert-danger');

}

else{
$insert="insert into users 
values (NULL,'$firstname','$lastname','$email','$password','$role')";


if(mysqli_query($connect,$insert)){
message_alert('created Successfully','alert-success');
  

}
}


}
?>
                                    <form  method='post' >
                                            <div class="form-group">
                                                    <label >First Name</label>
                                                    <input type="text" class="form-control" name='fname' id="fname" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input  type="text" class="form-control" name='lname' id="lname" aria-describedby="emailHelp">
                                            </div>
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Email address</label>
                                          <input  type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Password</label>
                                          <input  type="password" name='pass' class="form-control" id="pass">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input  type="password" onkeyup="checkpass()" class="form-control" id="conpass"><div id="msg"></div>
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleInputEmail1"> Role</label>
                                                <select class="form-control" name="role" >
                                                        <option></option>
                                                      <option value="2">user</option>
                                                      <option value="1">admin</option>
                                                      
                                                </select>     
                                         </div>

                                        
                                        <button type="submit" id ="submit"  name='submit'  class="btn btn-lg btn-primary btn-block">Submit</button>
                                      </form>
                              