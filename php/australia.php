<?php 
$pageTitle = "Australia";
include('inc/header.php'); 
?>

	<div class="wrapper">

		<section class="clearfix" id="top">
			<a href="australia.php"><h2>Australia</h2></a>
			<div class="col3">
				<div class="col3_image hider">
					<a href="australia.php"><img src="images/Bondi_Beach_Large.jpg" alt="picture of Bondi Beach" title="Bondi Beach" width="960" position="bottom right"></a>
				</div>
			</div>
		</section>

		<section class="clearfix" id="bottom">

			<div class="col1_left">
				<h3><a href="sydney.php">Sydney</a></h3>
				<figure><a href="sydney.php">
					<span data-picture data-alt="image of Sydney Harbor Bridge">
			        	<span data-src="images/sydney-harbor-bridge@2x.jpg"></span>
	        			<span data-src="images/sydney-harbor-bridge.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>
							<img src="images/sydney-harbor-bridge.jpg" alt="picture of Sydney Harbor Bridge" title="Sydney Harbor Bridge">
		        		</noscript>
	    			</span></a>
				</figure>
			</div>

			<div class="col1_mid">
				<h3><a href="cairns.php">The Great Barrier Reef</a></h3>
				<figure>
				<a href="cairns.php">
					<span data-picture data-alt="image of Port Douglas beach">
			        	<span data-src="images/cairns@2x.jpg"></span>
	        			<span data-src="images/cairns.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>
							<img src="images/cairns.jpg" alt="image of Port Douglas beach" title="Port Douglas beach">
		        		</noscript>
	    			</span></a>
				</figure>
			</div>

			<div class="col1_right">
				<h3><a href="alice-springs.php">The Outback</a></h3>
				<figure>
				<a href="alice-springs.php">
					<span data-picture data-alt="image of Ayers Rock">
			        	<span data-src="images/ayers-rock@2x.jpg"></span>
	        			<span data-src="images/ayers-rock.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>
							<img src="images/ayers-rock.jpg" alt="image of Ayers Rock" title="Ayers Rock">
		        		</noscript>
	    			</span></a>
				</figure>	
			</div>

		</section>
	</div>

<?php include('inc/footer.php'); ?>