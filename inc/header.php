<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<script src="https://raw.github.com/wilto/iOS-orientationchange-fix.js"></script>
	<meta name="description" content="A travelogue of past, present and future with (hopefully) helpful suggestions on where to stay and what to do, see and taste.">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/stylesheet.css"/>
	<link rel="stylesheet" href="css/device_stylesheet.css"/>
	<!--[if lt IE 9]!>
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
				<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![end if]-->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/picturefill.js"></script>
	<title>Traveling Van - <?php echo $pageTitle; ?></title>
</head>

<body>
	<a href="index.php"><header>
		<div class="title">
			<h1>Traveling <br>Van</h1>
		</div>
	</header></a>

	<nav>
	<ul>
		<li><a href="next-stop.php">The Next Stop</a></li>
		<li class="dropdown">
		<a id="drop1" href="past-trips.php" class="dropdown-toggle" data-toggle="dropdown">Past Trips</a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="nola.php">New Orleans</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="australia.php">Australia</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="portugal.php">Portugal</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="scotland.php">Scotland</a></li>
			</ul>
		</li>
		<li><a href="about.php">About Me</a></li>
	</ul>
	</nav>