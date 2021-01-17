
  <form class="form-inline">
    <input class="form-control" type="search" id="search" placeholder="Search" aria-label="Search">
 
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    <br>
   
  </form>
 

<div id ='result'class="result"></div>

<div class="row">

<div class="col-md-6">
    <div class="card" style="width: 250px;">
      <div class="card-body">
      
              <div class="text-center">
                  <i class="fas fa-user-plus fa-3x"style="color:#999;"></i>
                
                  <br>
                  <h2><?php get_total('users');?></h2>
                  <h2>Users</h2>
              </div>
        
      </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card" style="width: 250px;">
      <div class="card-body">
      
              <div class="text-center">
                  <i class="fas fa-user-plus fa-3x"style="color:#999;"></i>
                
                  <br>
                  <h2><?php get_total('freelancer'); ?></h2>
                  <h2>freelancers</h2>
              </div>
        
      </div>
    </div>
</div>


</div>