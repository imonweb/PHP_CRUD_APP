<!-- <nav id="nav" class="flex gap-10">
	<a href="%BASE%/">Home</a>
	<a href="%BASE%/about">About</a>
</nav> -->
<?php 
require('system/main.php');
?>
<!-- <nav class="navbar navbar-expand-sm bg-light"> -->
<!-- <nav class="navbar navbar-expand-sm bg-light ml-auto">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">
			<img src="%BASE%/logo.svg" class="w-10" width="80px"/> 
		</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">About</a>
        </li>
				<li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="%BASE%/logo.svg" class="w-10" width="80px"/> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
						 <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
						 <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            
          </ul>
          <!-- <form class="d-flex mt-3 mt-lg-0" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </div>
  </nav>

<script src="/src/scripts/nav.ts" type="module"></script>
