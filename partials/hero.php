<?php 
require('system/main.php');
?>

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-12 col-md-12 mx-auto">
      <h1 class="fw-light">PHP CRUD APP</h1>
      
      <div class="row">
        <div class="col-lg-6">
          <h4 class="mt-2 text-primary">All Database</h4>
        </div>
        <div class="col-lg-6">
          <button type="button" class="btn btn-primary my-2"><i class="fa-solid fa-user-plus"></i> Add New User </button>
          <a href="#" class="btn btn-success m1"><i class="fa-solid fa-table"></i> Export to Excel</a>
        </div>
      </div>
      <hr class="my-2">
     
      <div class="row">
        <div class="col-lg-12">
          
        <?php include('partials/table.php'); ?>
        
        </div>
      </div>
    </div>
  </div>
  
</section>