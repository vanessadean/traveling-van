<?php 
$pageTitle = "Portugal";
include('inc/header.php'); 
?>

	<div class="wrapper">

		<section class="clearfix" id="top">
			<a href="portugal.php"><h2>Portugal</h2></a>
			<div class="col3">
				<div class="col3_image hider">
					<a href="portugal.php"><img src="images/douro-river.jpg" alt="image of Douro River"></a>
				</div>
			</div>
		</section>

		<section class="clearfix" id="bottom">

			<div class="col1_left">
				<h3><a href="lisbon.php">Lisbon</a></h3>
				<figure>
					<a href="lisbon.php"><span data-picture data-alt="image of Padrão dos Descobrimentos">
			        	<span data-src="images/lisbon@2x.jpg"></span>
	        			<span data-src="images/lisbon.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>
							<img src="images/lisbon.jpg" alt="image of Padrão dos Descobrimentos" title="Padrão dos Descobrimentos">
		        		</noscript>
	    			</span></a>
				</figure>
			</div>

			<div class="col1_mid">
				<h3><a href="porto.php">Porto</a></h3>
				<figure><a href="porto.php">
					<span data-picture data-alt="image of Quinta de Aveleda">
			        	<span data-src="images/quinta-de-aveleda@2x.jpg"></span>
	        			<span data-src="images/quinta-de-aveleda.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>
							<img src="images/quinta-de-aveleda.jpg" alt="image of Quinta de Aveleda" title="Porto">
		        		</noscript>
	    			</span></a>
				</figure>	
			</div>

			<div class="col1_right">
				<h3><a href="obidos.php">Obidos</a></h3>
				<figure>
				<a href="obidos.php"><span data-picture data-alt="image of Obidos castle">
			        	<span data-src="images/the-castle@2x.jpg"></span>
	        			<span data-src="images/the-castle.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>
							<img src="images/the-castle.jpg" alt="picture of Obidos castle" title="Obidos castle">
		        		</noscript>
	    			</span></a>
				</figure>
			</div>
		</section>
	</div>

<?php include('inc/footer.php'); ?>