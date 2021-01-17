
<?php 


require "delete_user.php";


  


if(isset($_POST['del']))
{
  
  delete($_SESSION['id']);

  unset( $_SESSION['id']);

  
}
else if(isset($_POST['cancel'])){
 header("location:dashboard.php?page=usermansgement");
}


if($_SESSION['role']==2){
  header("location:dashboard.php");
  }
$result=select_tbl("users");

?>




<div id="confirm" style=" display:none; border:  1px solid black  ;  background:rgb(241 243 244);
 width:300px; padding:10px; margin:10px auto;">
     
        <h5 class="modal-title" style="margin: 20px auto;">are you sure to delete ?</h5>
       
          <form method='post'  >
            <button type="submit" name="del" class="btn btn-primary">delete</button>
            <button type="submit" name="cancel" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          
   </div>



<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
        <th scope="col">role</th>
        <th scope="col" class="text-center">operation</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($users=mysqli_fetch_array($result))
      {   ?>

      <tr>
      <td> <?= $users['id']?>  </td>
      <td><?= $users['firstname']?> </td>
      <td><?= $users['lastname']?>  </td>
      <td><?= $users['email']?>  </td>
      <td> <?= $users['userpass']?>  </td>
      <?php
      if($users['role']=='2')
      {
        echo"<td> User</td>";
      }
      
      else{

        echo"<td> Admin</td>";}
      ?>
      
      
      <td class="text-center">
            <a href="dashboard.php?page=edit_user&id=<?=$users['id']?>"> <i class="fas fa-edit"></i></a>
            <a name ='delete' id ='delete' href='#' onclick="show()" value='<?php $_SESSION['id']= $users['id']?>'  >   <i class="fas fa-trash-alt"></i></a>
        </td>
      </tr>
    <?php  }?>
      
      
      
      
    </tbody>
  </table>
  
  