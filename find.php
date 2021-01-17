<?php

 require('admin/config.php');
 if(isset($_GET['K'])){
   $name =  '%' . $_GET['K'] . '%';
   $sql = "SELECT  freelancer.id,freelancer.name , freelancer.photo ,langs.description 
   FROM      freelancer INNER JOIN langs
   ON        freelancer.id = langs.f_id
   AND       langs.description LIKE '$name'";

   $res = mysqli_query($connect,$sql);

   if(mysqli_num_rows($res) > 0){
     while($row = mysqli_fetch_array($res)){
    ?>  

            <tr>
              <td>
               <a href="profile.php?frId=<?= $row['id']?>">   
               <?php     
               if($row['photo']!=null){ ?>

                <img src="admin/uploaded/<?= $row['photo']?>" width="60" height="60">
               <?php } 
               else{ ?>
                <img src="admin/uploaded/woman.png" width="60" height="60">
             <?php  }
               
               ?>
                &nbsp;
                 <?= ucwords($row['name'])?>
              </a>

              </td>
              
            </tr>
      
    <?php }

   }else{
  
      echo 'Not Available';
   }

 }