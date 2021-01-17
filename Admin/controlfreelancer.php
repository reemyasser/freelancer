<?php
$result=select_tbl("freelancer");
?>



<select id ='free' class="form-control">
<option  > Choose Freelancer</option>
  <?php
while($freelancer=mysqli_fetch_array($result))
{   ?>
<option value=<?= $freelancer['id']?>> <?= $freelancer['name'] ?></option>
<?php
}
?>
</select>

<div id='result'>

</div>



<!--
                                        <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">name</th>
                                                   
                                                    <th scope="col">email</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                         while($freelancer=mysqli_fetch_array($result))
                                         {   ?>

                                         <tr>
                                         <td> <?= $freelancer['id']?>  </td>
                                         
                                          <td><?= $freelancer['name']?>  </td>
                                          <td><?= $freelancer['email']?>  </td>
                                         
                                          
                                          <td class="text-center">
                                               <a href="#"> <i class="fas fa-edit"></i></a>
                                               <a href="#">   <i class="fas fa-trash-alt"></i></a>
                                            </td>
                                          </tr>
                                       <?php  }?>
                                         
                                                </tbody>
                                         -->