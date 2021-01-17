<div class="list-group">
                        
    <a href="dashboard.php?page=home" class="list-group-item list-group-item-action active">
    <i class="fas fa-tachometer-alt"></i>  Dashboard
    </a>
    <a href="dashboard.php?page=Createuser" class="list-group-item list-group-item-action"> <i class="fas fa-user-plus"></i>  Create New User</a>
    <a href="dashboard.php?page=usermansgement" class="list-group-item list-group-item-action"> <i class="fas fa-users-cog"></i>  Users Managemet  <span class="badge badge-light" ><?php  get_total('users'); ?></span></a>
    <a href="dashboard.php?page=controlfreelancer" class="list-group-item list-group-item-action"><i class="fas fa-cogs"></i>   Freelancers   <span class="badge badge-light" ><?php get_total("freelancer")?></span></a>
</div>
