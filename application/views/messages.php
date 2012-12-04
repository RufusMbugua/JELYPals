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
		context.font = "2em Quicksand";
		context.textAlign = "center";
		context.fillStyle = "#000000";
		context.fillText("JELY", centerX, centerY);
		context.font = "1.2em Quicksand";
		context.fillText("Pals", centerX, centerY + 20);
	};
	
	
$(document).ready(function() {
	$('.message h3').click(function() {
		$(".message").animate({
			height : '100%'
		});
	});
	$('canvas').click(function() {
		$(".message").animate({
			height : '10%'
		});
	});
});
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
				<select style="float:right">
					<option>Messages</option>
					<option>My Messages</option>
					<option>Send Message</option>
				</select>
			</section>
			</section>
			
		</header>
		<section class="content">
			<section class="message">
				<h3>Story 1</h3>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque risus, suscipit nec ultrices nec, sagittis at eros. Aenean eu lectus turpis. Etiam aliquet tincidunt mattis. Vivamus faucibus euismod libero, ut mollis diam pretium sit amet. Aliquam blandit interdum sollicitudin. Curabitur vel nibh sed ante eleifend lobortis at vitae tellus. Curabitur gravida commodo felis, non scelerisque elit bibendum consectetur. Curabitur vitae tellus mauris. Etiam imperdiet sodales neque sed tincidunt. Curabitur est magna, mollis adipiscing scelerisque a, dictum mattis metus. Ut et ante tellus, in pulvinar tortor. Fusce vehicula volutpat mauris aliquam posuere.

Maecenas quis velit id nisi placerat tristique eu eleifend diam. Sed a leo metus, ut gravida felis. Morbi accumsan elementum urna quis mattis. Nunc eu mi ac lacus elementum pellentesque. Curabitur consectetur euismod placerat. Suspendisse sed odio risus, eu viverra lorem. Aenean justo ipsum, vestibulum sit amet tincidunt sit amet, pretium et massa. Nulla facilisi.
			</section>
			<section class="message">
				<h3>Story 2</h3>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque risus, suscipit nec ultrices nec, sagittis at eros. Aenean eu lectus turpis. Etiam aliquet tincidunt mattis. Vivamus faucibus euismod libero, ut mollis diam pretium sit amet. Aliquam blandit interdum sollicitudin. Curabitur vel nibh sed ante eleifend lobortis at vitae tellus. Curabitur gravida commodo felis, non scelerisque elit bibendum consectetur. Curabitur vitae tellus mauris. Etiam imperdiet sodales neque sed tincidunt. Curabitur est magna, mollis adipiscing scelerisque a, dictum mattis metus. Ut et ante tellus, in pulvinar tortor. Fusce vehicula volutpat mauris aliquam posuere.

Maecenas quis velit id nisi placerat tristique eu eleifend diam. Sed a leo metus, ut gravida felis. Morbi accumsan elementum urna quis mattis. Nunc eu mi ac lacus elementum pellentesque. Curabitur consectetur euismod placerat. Suspendisse sed odio risus, eu viverra lorem. Aenean justo ipsum, vestibulum sit amet tincidunt sit amet, pretium et massa. Nulla facilisi.
			</section>
			<section class="message">
				<h3>Story 3</h3>
			</section>
			<section class="message">
				<h3>Story 4</h3>
			</section>
			<section class="message">
				<h3>Story 5</h3>
			</section>
		</section>
		<footer>
			
		</footer>
	
	</body>
</html>