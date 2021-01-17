<?php
include('include/header.php');
include('include/navbar.php');
if(!isset($_SESSION['name']))
{
  header('location:index.php');
  exit();
}
?>
        <!-- nav-bar-->
       
        <!--end nav-bar-->

       
         
        <!--Container-->

          <div class="container">
              <div class="row">
                  <div class="col-md-3">
                       <?php
                       if(isset($_SESSION['role'])&& $_SESSION['role']==1)
                       {
                         include 'include/admin_sidebar.php';
                       }
                       elseif(isset($_SESSION['role'])&& $_SESSION['role']==2)
                       {
                        include 'include/user_sidebar.php';
                       }
                       
                       
                       ?>
                  </div>
                  <div class="col-md-9">
                        <div class="card"> 
                        
                       
              
                     

                                <div class="card-header">
                                <?php
                                if(isset($_GET['page']))
                                {
                                  switch ($_GET['page']){
                                    case "home":
                                    echo "dashboard";
                                    break;
                                    case "Createuser":
                                      echo "Create user";
                                    break;
                                    case "controlfreelancer":
                                      echo "control freelancer";
                                    break;
                                      case "usermansgement":
                                        echo "user mansgement";
                                      break;
                                      case "edit_user":
                                        echo "Edit User";
                                      break;
  

                                    }
                                }
                                else
                                {
                                  echo "dashboard";
                                }
                                ?>
                                 
                                </div>
                                <div class="card-body">
                                   
                                  <?php
                                  if(isset($_GET['page']))
                                  {
                                    include($_GET['page'].'.php');
                                  }
                                  else{
                                    include('home.php');
                                  }
                                  ?>
                                </div>
                        </div>
                  </div>

              </div>
          </div>
         <!-- End  Container-->
         <?php
       include('include/footer.php');
       ?>