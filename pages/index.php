<?php
require('system/db.php');
require('system/main.php');

$layout = new HTML(title: 'PHP CRUD App');
?>


<div class="flex flex-col items-center gap-10 text-2xl">
	<?php include('partials/nav.php'); ?>
	<?php include('partials/hero.php'); ?>
	


	<!-- <div class="flex flex-col items-center"> -->
		<?php //include('partials/vite-name.php'); ?>
 

		<!-- <img src="%BASE%/logo.svg" class="w-20" /> -->
		  <!-- <div class="container py-4 px-3 mx-auto"> -->
   
    <!-- </div> -->
	<!-- </div> -->

	<!-- <div id="repos" class="text-base flex gap-10"></div> -->
	
</div>

<script src="/src/scripts/repos.ts" type="module"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-2.1.4/datatables.min.js"></script>
<script src="/src/scripts/ajax.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
