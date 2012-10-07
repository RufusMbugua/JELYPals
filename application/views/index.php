<html>
	<head>

		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>

		<!-- Attach JavaScript files -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
 <script>
	window.onload = function() {
		var canvas = document.getElementById("myCanvas");
		var context = canvas.getContext("2d");
		var centerX = canvas.width / 2;
		var centerY = canvas.height / 2;
		var radius = 70;

		context.beginPath();
		context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
		context.fillStyle = "purple";
		context.fill();
		context.lineWidth = 5;
		context.strokeStyle = "green";
		context.stroke();
		context.textAlign = "center";
		context.fillStyle = "#000000";
		context.fillText("JELYPals", centerX, centerY);
	};

    </script>
		<title><?php echo $title; ?></title>
	</head>

	<body>

		<header>
			<canvas id="myCanvas">
				
			</canvas>
			<section class="welcome">
				Welcome back User.
				New Notes waiting for you from PenPal.
			</section>
			<section class="right-side">
			<section class="search">
				<input type="search" placeholder="Search Here"/>
			</section>
			<section class="options">
				<select>
					<option>Notes</option>
					<option>MyPad</option>
					<option>PenPal's Pad</option>
					<option>Post Note</option>
				</select>
				<select>
					<option>Messages</option>
					<option>My Messages</option>
					<option>Send Message</option>
				</select>
			</section>
			</section>
			
		</header>
		<section class="content">
			<section class="notes-mini">
				
			</section>
			<section class="notes-mini">
				
			</section>
			<section class="notes-mini">
				
			</section>
			<section class="notes-mini">
				
			</section>
			<section class="notes-mini">
				
			</section>
			<section class="notes-mini">
				
			</section>
			<section class="notes-mini">
				
			</section>
			<section class="notes-mini">
				
			</section>
			<section class="notes-mini">
				
			</section>
			<section class="notes-mini">
				
			</section>
		</section>
		<footer>
			
		</footer>
	
	</body>
</html>