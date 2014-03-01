<!doctype html>
<!--index.html
Evan P.
http://webdesign4.georgianc.on.ca/~200198596/comp2068/assign1/index.php
-->
<html lang="en">
	<head class="homehead">
		<meta charset="utf-8" />

		<!-- load the stylesheets and javascript -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/foundation.css" />

		<link rel="stylesheet" href="themes/themeRoller.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		<script src="js/vendor/modernizr.js"></script>
		<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>

		<title>Welcome</title>
		<!-- header.html includes navigation
		and jquery.min.js lines.
		Custom javascript loaded in footer. -->
		<nav>
			<!-- navigation -->
			<div data-role="page" id="home">
				<div data-role="header" data-theme="c">
					<h1>Personality Survey</h1>
					<!-- link to the home page using the logo -->
					<p>
						<a href="#home"> <img id="logo" src="logo75.png" alt="Arrowhead Arts Logo" > </a>
					</p>
				</div>
				<div data-role="navbar">
					<ul>
						<li>
							<a href="#home" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="home">Home</a>
						</li>
						<li>
							<a href="#survey"data-theme="c" data-icon="gear">Survey</a>
						</li>
						<li>
							<a href="#contact"data-theme="c" data-icon="info">Contact Me</a>
						</li>
						<!--
						<nav class="large-8 medium-8 small-8 columns">
						<a href="index.php"		id="homenav"	>Home</a>
						<a href="about.php" 	id="aboutnav"	>About Me</a>
						<a href="projects.php" 	id="projnav"	>Projects</a>
						<a href="services.php" 	id="servnav"	>Services</a>
						<a href="github.php" 	id="gitnav"		>GitHub</a>
						<a href="contact.php" 	id="contnav"	>Contact</a>
						</nav> -->
					</ul>
				</div>
				<section role="main" class="ui-content">
					<img id="colourwheel" alt="personality colour wheel" src="colourwheel.png" >
				</section>
				<!-- Footer -includes copyright -->
				<div data-role="footer" data-theme="c" data-position="fixed">
					<h4>Copyright 2014</h4>
				</div>
			</div>
		</nav>

		<div class="row">
			<div class="small-3 medium-4 large-3 columns">
				<img src="img/logo.png" alt="Arrowhead Arts Logo" >
			</div>
			<div class="small-5 medium-4 large-5 columns">
				<h2>My portfolio website!</h2>
			</div>
		</div>
	</head>
	<body id="home" class="row">
		<!-- mission statement -->
		<p id="mission" class="large-8 columns">
			There is a never ending source of knowledge at everyones fingertips when using a computer. I enjoy the fact that I can create anything I want. I can be imaginative and reach out to people with the use of various digital mediums. With the vast amount of people connected by the internet, there are always opportunities to meet new people and learn new things. I enjoy learning, especially on my own time for mini projects.
		</p>
		<!-- more information button, featured work, connect -->
		<div id="featConn" class="row">
			<div class="large-1 medium-1 small-1 columns">
				<a href="projects.php" class="sbutton">More!</a>
			</div>
			<div class="large-4 medium-4 small-4 columns">
				<p class="outline">
					featured work
				</p>
			</div>
			<div class="large-3 medium-3 small-3 columns">
				<p class="outline">
					stay connected
				</p>
			</div>
		</div>
	</body>

	<footer>
		<!-- loads copyright and custom javascript file -->
		<?php
		include 'footer.html';
		?>
	</footer>
</html>