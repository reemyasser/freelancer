<?php
require "admin/_lib/function.php";
require 'functions.php';
$frid=$_GET['frId'];
$select="SELECT * from freelancer where id='$frid' ";
$res=mysqli_query($connect,$select);
$row=mysqli_fetch_array($res);
$msgerror=  insertmessagestofreelancer();





?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
       arab freelancer
      </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/style.css"  >
        <link rel="stylesheet" href="css/index.css"  >
       
    
       
    </head>
    <body>
    <!--header-->
    <div class="header">
        <div class="logo">
            Arab Freelancer
        </div>
        <div class="nav-bar">
            <ul>
                <li><a href="#portfolio" >Portfolio</a></li>
                <li><a href="#about" >About</a></li>
                <li><a href="#contact" >Contact</a></li>
            </ul>
        </div>
    </div>
     <!--end header-->
     <!-- Master header-->
    <div class="master-header">
        <?Php if($row['photo']!=null)
        { ?>
        <img src="admin/uploaded/<?= $row['photo']?>" alt="<?=$row['name']?>">

       <?php } 
       else{
           ?>  <img src="admin/uploaded/woman.png"  alt="<?=$row['name']?>" width="60" height="60">
           <?php
       }
       ?>
        
        <h1><?=$row['name']?></h1>
        <h3><?=$row['title_job']?></h3>
       <a href="#"> <i class="fab fa-facebook-square fa-2x" style="color:#1096f4;"></i> </a>
       <a href="#"> <i class="fab fa-youtube fa-2x" style="color:#ff0000;"></i> </a>
       <a href="#"> <i class="fab fa-twitter-square fa-2x" style="color:#1DA1F2;"></i></a>
      

    </div>
     <!--End Master header-->
    <!-- content -->
     <div class="content">

        <div id ="portfolio">
               <h1> Portfolio</h1>
               <img src="images/woman.png" alt="project1">
               <img src="images/person.png" alt="project1">
               <img src="images/Programmer-512.png" alt="project1">
      
      
        </div>
        <div id ="about">
          <h1>  About </h1>
          <p>
                Freelance (sometimes spelled free-lance or free lance),[1] freelancer, or freelance worker, are terms commonly used for a person who is self-employed and not necessarily committed to a particular employer long-term. Freelance workers are sometimes represented by a company or a temporary agency that resells freelance labor to clients; others work independently or use professional associations or websites to get work.

                While the term independent contractor would be used in a different register of English to designate the tax and employment classes of this type of worker, the term "freelancing" is most common in culture and creative industries, and use of this term may indicate participation therein.[2]
          </p>
        </div>
        
        <div id ="contact">
            <?php  if(isset($msgerror['msgsend'])) { message_alert($msgerror['msgsend'],'alert-success');}  ?>
            <h1>   Contact</h1>
            <div class="contact-form">
                <form method="post">
                    <input type="text" name="namecontact" class="form-control"  value="<?php echo isset($_POST["namecontact"]) ? $_POST["namecontact"] : '';?>" placeholder="please enter your name">
                    <span> <?php  if(isset($msgerror['name'])) echo $msgerror['name']; ?> </span>
                    <br> <input type="text" class="form-control" value="<?php echo isset($_POST["emailcontact"]) ? $_POST["emailcontact"] : '';?>" name="emailcontact" placeholder="please enter your email">
                    <span> <?php  if(isset($msgerror['email'])) echo $msgerror['email']; ?> </span>
                    
                    <br> <textarea class="form-control" rows="10" name="message" value ='<?php echo isset($_POST["message"]) ? $_POST["message"] : '';?>'cols="20" placeholder="please enter your message"></textarea>
                    <span> <?php  if(isset($msgerror['message'])) echo $msgerror['message']; ?> </span>
                    <br> <input class="btn btn-primary" type="submit" name="send" value="Send">
                </form>
            </div>
        </div>
     </div>
     <!--End content-->
     <div class="footer">
         <p>Copyright &copy; 2020.</p>

     </div>
     <script src="js/jquery.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/all.min.js"></script>
</body>
</html>