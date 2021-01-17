<?php
require "admin/_lib/function.php";
require 'functions.php';

require 'includes/header.php';
$msg=create_freelancer();
$msglog=loginfreelancer();

?>




    
<div class='body_signup'>
    <div class="header">
        <div class="logo">
            Arab Freelancer
        </div>
        <div class="nav-bar">
            <ul>
                
                <li><a href="index.php" >Home</a></li>
            </ul>
        </div>
    </div>


     <div class="container" >
 
        <div class="row">
            <div class="col-md-6">



      <!-- ----------------------------------------login ---------------------------------------------------------->
                <div class="form_login">
                     <div class="jumbotron">

                            <h1 class="display-4 text-center" style="margin-bottom:25px">
                                Log in
                            </h1>

                                
                            <form method="post" enctype="multipart/form-data">



                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="emaillog" class="form-control"  value="<?php echo isset($_POST["emaillog"]) ? $_POST["emaillog"] : ''; ?>">
                                    <span><?php if(isset($msglog['email'])) echo $msglog['email'];?></span>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="passwordlog" class="form-control" >
                                    <span><?php if(isset($msglog['password'])) echo $msglog['password'];?></span>
                                </div>



                                <button type="submit" class="btn btn-lg btn-primary btn-block" name="submit1" class="btn btn-primary" >
                                      Log in</button>
                                <span><?php if(isset($msglog['invalid'])) echo $msglog['invalid'];?></span>
                            </form>

                        </div>
                </div>
            </div>
<!-- ----------------------------- end login ------------------------->   

     



        <div class="col-md-6">
        <!--  ------------------      signup   --------------------------  -->
            <div class="form_signup">
                <div class="jumbotron">
                    <div class="msg_signup"> <?php if(isset($msg['msgcreation'])){ message_alert(@$msg['msgcreation'],'alert-success');    
                    echo ' <img class="imgsh" src="images/download.jpg" alt="image">';
                    
                    } ?>
                   
                    </div>
                    <h1 class="display-4 text-center" style="margin-bottom:25px">
                        Sign Up
                   </h1>
                    
                
                    <form method="post" enctype="multipart/form-data">
                    <label ><h6>Type Of Account</h6></label>
                        <div class="form-check">
                            <input class="form-check-input"  value="1" type="radio" name="type" id="freelancer">
                            <label class="form-check-label" for="freelancer">
                               Freaalancer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" checked value="2" type="radio" name="type" id="user" checked>
                            <label class="form-check-label" for="user">
                                Just user
                            </label>
                        </div>
 <br>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>" >
                            <span><?php if(isset($msg['name'])) echo $msg['name'];?></span>
                        </div>


                        <div class="form-group">
                            <div id='title'>
                            <label> Job Title </label>
                            <input type="text" name="title" class="form-control"  value="<?php echo isset($_POST["title"]) ? $_POST["title"] : ''; ?>">
                            <span><?php if(isset($msg['title'])){ if($_POST['type']=='1'){
                                echo $msg['title'];}}?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="disc">
                            <label>Discription </label>
                            <textarea  name="disc" class="form-control"  value="<?php echo isset($_POST["disc"]) ? $_POST["disc"] : ''; ?>"></textarea>
                            <small> ex: php , css and html  etc.....</small>
                            <span><?php if(isset($msg['disc'])){ if($_POST['disc']=='1'){
                                echo $msg['disc'];}}?></span>
                            </div>
                        </div>


                        <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" >
                        <span><?php if(isset($msg['email'])) echo $msg['email'];?></span>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id ='password' name="password" class="form-control" >
                            <span><?php if(isset($msg['password'])) echo $msg['password'];?></span>
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password"id='conpassword' name="conpassword" onkeyup="checkpass()" class="form-control" >
                            <span><?php if(isset($msg['conpassword'])) echo $msg['conpassword'];?></span>
                            <div id='msg'></div>

                        </div>

                        <div class="form-group"  id='photo'>
                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>

                        <button type="submit" id='signup'  class="btn btn-lg btn-primary btn-block" name="submit" class="btn btn-primary" >
                        Sign Up
                        </button>
                    </form>

                </div>
            </div>

<!--    -----------------------   end signup    -------------- -->

        </div>
     </div>
</div>
   <?php
   require 'includes/footer.php';
   
   
   ?>