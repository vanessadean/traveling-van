<?php 
$pageTitle = "Where I'm Going and Where I've Been";
include('inc/header.php'); 
?>
	<div class="wrapper">

		<section class="clearfix" id="top">
			<a href="next-stop.php"><h2>The Next Stop: China!</h2></a>
			<div class="col3">
				<a href="next-stop.php">
					<div class="home_image"></div>
				</a>
				<figcaption>Great Wall &copy; Grace Yang, 2006.</figcaption>
			</div>
		</section>

		<section class="clearfix" id="bottom">
			<h2>Past Trips</h2>
			<div class="col1_left">
				<h3><a href="nola.php">New Orleans</a></h3>
				<figure>
				<a href="nola.php">
					<span data-picture data-alt="image of Jackson Square">
			        	<span data-src="images/Jackson-Square@2x.jpg"></span>
	        			<span data-src="images/Jackson-Square.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>
							<img src="images/Jackson-Square.jpg" alt="image from Jackson Square" title="Jackson Square">
		        		</noscript>
	    			</span></a>
			</figure>
			</div>

			<div class="col1_mid">
				<h3><a href="australia.php">Australia</a></h3>
				<figure>
				<a href="australia.php">
					<span data-picture data-alt="image of Bondi Beach">
			        	<span data-src="images/bondi-beach-2@2x.jpg"></span>
	        			<span data-src="images/bondi-beach-2.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>	
							<img src="images/bondi-beach-2.jpg" alt="picture of Bondi Beach" title="Bondi Beach">
		        		</noscript>
	    			</span></a>
				</figure>
			</div>

			<div class="col1_right">
				<h3><a href="portugal.php">Portugal</a></h3>
				<figure>
				<a href="portugal.php">
					<span data-picture data-alt="image of Portugal">
			        	<span data-src="images/portugal@2x.jpg"></span>
	        			<span data-src="images/portugal.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>	
							<img src="images/portugal.jpg" alt="image of Portugal" title="Portugal">
		        		</noscript>
	    			</span></a>
				</figure>	
			</div>

			<!--<div class="item">
				<h3><a href="scotland.html">Scotland</a></h3>
				<figure>
				<a href="scotland.html"><img src="images/swamp.jpg" alt="image of misty Scotland" title="Scotland"></a>
				</figure>	
			</div>-->
		</section>
	</div>

<?php include('inc/footer.php'); ?>
