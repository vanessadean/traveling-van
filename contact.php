<?php 
$pageTitle = "Contact";
include('inc/header.php'); 
?>
	<div class="wrapper">

		<section class="clearfix">
			<a href="about.php"><h2>About Me</h2></a>

			<div class="col1_left">
				<figure>
			
					<span data-picture data-alt="image of me">
			        	<span data-src="images/van@2x.jpg"></span>
	        			<span data-src="images/van.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>
							<img src="images/van.jpg" alt="image of me" title="Van(essa)">
		        		</noscript>
	    			</span>

				</figure>	
			</div>

			<div class="col2_right">
				
				<h2>Thanks!</h2>
				<p>Your email has been sent.</p>

			</div>

		</section>
	</div>

<?php include('inc/footer.php'); ?>