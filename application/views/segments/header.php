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
		context.font="2em Quicksand";
		context.textAlign = "center";
		context.fillStyle = "#000000";
		context.fillText("JELY", centerX, centerY);
		context.font="1.2em Quicksand";
		context.fillText("Pals",centerX,centerY+20);
	};

    </script>
		<title><?php echo $title; ?></title>
	</head>