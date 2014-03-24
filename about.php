<?php 
$pageTitle = "About";
include('inc/header.php'); 
?>

	<div class="wrapper">
		<section class="clearfix">
			<a href="about.php"><h2>About Me</h2></a>
			<div class="col1_left">
				<figure>
					<span data-picture data-alt="Traveling Van">
			        	<span data-src="images/van@2x.jpg"></span>
	        			<span data-src="images/van.jpg"  data-media="(min-width: 400px)"></span>

		        		<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			        	<noscript>
		    	        	<img src="images/van.jpg" alt="Traveling Van">
		        		</noscript>
	    			</span>
				</figure>	
			</div>

			<div class="col2_right">
				<p>I&#39;m traveling Van(essa) and this website is a place for me to swap stories with other travelers and plan for future trips. My philosophy on planning a trip is to research like crazy, plan all kinds of stuff and then when I get there, take a deep breath and relax. I think making an itinerary is about giving yourself options, not checking off boxes on a list. I like to pick out a few things that are a priority, then have a map at the ready and see where the day takes me. I get almost as much pleasure from creating a Google map for a new destination as I do traveling there.</p>

				<p>Last but not least, the impetus behind creating this site was my interest in web design. I built this site to practice what I’m learning and showcase my skills. So if you see something wonky or you have a suggestion to make it better, or even if just you see a typo, please let me know so I can fix it. This is a work in progress that I plan to expand upon as I learn more. I&#39;ll also be posting my other projects <a href="http://www.thisisvanessa.com">here</a>.</p>
				<p>Contact me!</p>

				<form method="post" action="mailer.php">
				<label for="name">Your Name</label>
				<input type="text" name="name" required>
				<label for="email">Your Email</label>
				<input type="email" name="email" required>
				<label for="message">Message</label>
				<textarea rows="10" name="message"></textarea>
				<input type="submit" value="send">
				</form>

			</div>
		</section>
	</div>

<?php include('inc/footer.php'); ?>