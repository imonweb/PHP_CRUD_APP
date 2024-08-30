<?php
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

	<div id="repos" class="text-base flex gap-10"></div>
</div>

<script src="/src/scripts/repos.ts" type="module"></script>
